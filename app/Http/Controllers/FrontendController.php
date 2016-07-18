<?php

namespace App\Http\Controllers;


use App\Category;
use App\City;
use App\Client;
use App\Club;
use App\Post;
use App\Question;
use App\University;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Cache;


class FrontendController extends Controller
{

    public function index()
    {
        $page = 'index';

        $clients = Cache::remember('index_client', 10, function() {
            return DB::table('clients')->get();
        });


        $subOrientationCategories = Cache::remember('index_sub_orientation_categories', 10, function()  {

            $orientationCategoryId = Category::where('slug', 'huong-nghiep')->first()->id;

            return DB::table('categories')->where('parent_id', $orientationCategoryId)->get();

        });

        return view('frontend.index', compact('page', 'clients', 'subOrientationCategories'));
    }

    public function campus()
    {
        $page = 'campus';

        $cities = Cache::remember('campus_cities', 10, function() {
            return DB::table('cities')->get();
        });

        $universities = Cache::remember('campus_universities', 10, function() {
            return DB::table('universities')->get();
        });

        foreach ($cities as $city) {
            $city->universities = array_where($universities, function ($key, $value) use($city) {
                return $value->city_id == $city->id;
            });
        }

        $rightClubs = Cache::remember('campus_right_clubs', 10, function() {
            return DB::table('clubs')
                ->join('universities', 'clubs.university_id', '=', 'universities.id')
                ->where('clubs.status', true)
                ->select('clubs.*', 'universities.name as university_name')
                ->get();
        });


        $questions = Cache::remember('campus_questions', 10, function() {
            return DB::table('questions')->get();
        });

        $posts = Cache::remember('campus_posts', 10, function() {
            $category = Category::where('slug', 'campus')->first()->id;
            return DB::table('posts')->where('category_id', $category)->orderBy('updated_at', 'desc')->limit(4)->get();
        });

        return view('frontend.campus', compact('cities', 'page', 'rightClubs', 'questions', 'posts'));
    }

    public function saveQuestion(Request $request)
    {
        $data = $request->all();

        if (isset($data['question'])) {
            unset($data['_token']);
            Question::insert($data);
        }
        return redirect('faq');
    }
    
    public function search(Request $request) 
    {
        $page = 'search';

        $cities = Cache::remember('search_cities', 10, function() {
            return DB::table('cities')->get();
        });

        $universities = Cache::remember('campus_universities', 10, function() {
            return DB::table('universities')->get();
        });

        foreach ($cities as $city) {
            $city->universities = array_where($universities, function ($key, $value) use($city) {
                return $value->city_id == $city->id;
            });
        }


        if ($request->input('q')) {

            $keyword = $request->input('q');

            if (is_string($keyword)) {

                $newsCategories = Category::where('slug', 'tin-tuc')->first();

                $posts = Post::where('title', 'LIKE', '%' . $request->input('q') . '%')->paginate(10);

                return view('frontend.search_post', compact('posts', 'newsCategories', 'keyword', 'page'));
            }

        } else if ($request->input('uni')) {


            $university = University::where('slug', $request->input('uni'))->get();

            if ($university->count() > 0) {

                $clubs = Club::where('university_id', $university->first()->id)->paginate(10);

                return view('frontend.search_club', compact('clubs', 'page', 'cities'));
            }
        } else {
            $clubs = Club::latest('updated_at')->paginate(10);

            return view('frontend.search_club', compact('clubs', 'page', 'cities'));
        }
    }

    public function question($value = null)
    {
        $page = 'faq';
        $questions = Question::publish()->paginate(10);
        return view('frontend.question', compact('questions', 'page'));
    }

    public function club($value)
    {
        $page = 'club';
        $cities = Cache::remember('club_cities', 10, function() {
            return DB::table('cities')->get();
        });
        $clubs = Club::whereSlug($value)->get();

        return view('frontend.club', compact('cities', 'page', 'clubs'));
    }

    public function category($value)
    {
        $category = Category::where('slug', $value)->first();

        if ($category->subCategories->count() == 0) {
            //child categories
            $posts = Post::publish()
                ->where('category_id', $category->id)
                ->latest('updated_at')
                ->limit(5)->get();
            $page = ($category->parent_id) ? $category->parent->slug : $category->slug;

        } else {
            //parent categories
            $page = $category->slug;
            $posts = Post::publish()
                ->whereIn('category_id', $category->subCategories->lists('id')->all())
                ->latest('updated_at')
                ->limit(5)->get();

        }

        if ($value == 'su-kien') {

            $newsCategories = Category::where('slug', 'tin-tuc')->first();

            return view('frontend.event', compact(
                'category', 'posts', 'page', 'newsCategories'
            ));
        } else if ($value == 'huong-nghiep') {

            $jobCategory = Category::where('slug', 'job')->first();

            return view('frontend.orientation', compact(
                'category', 'posts', 'page', 'jobCategory'
            ));

        }  else {
            return view('frontend.category', compact(
                'category', 'posts', 'page'
            ));
        }       
    }

    public function xml()
    {
        $category = Category::where('slug', 'su-kien')->first();

        $response = '<?xml version="1.0"?><monthly>';

        //Carbon::now()->toDateTimeString();
        foreach ($category->posts as $post)
        {
            $response .= '<event>';
            $response .= '<id>'.$post->id.'</id>';
            $response .= '<name>'.$post->title.'</name>';
            $response .= '<startdate>'.$post->event_start->toDateString().'</startdate>';
            $response .= '<enddate>'.$post->event_end->toDateString().'</enddate>';
            $response .= '<starttime>'.$post->event_start->toTimeString().'</starttime>';
            $response .= '<endtime>'.$post->event_end->toTimeString().'</endtime>';
            $response .= '<color>#ffb128</color>';
            $response .= '<url>'.url($post->slug.'.html').'</url>';
            $response .= '</event>';
        }

        $response .= '</monthly>';
        return response($response)->header('Content-Type', 'text/xml');

    }

    public function main($value)
    {
        if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
            $post = Post::where('slug', $matches[1])->get();
            if ($post->count() > 0) {
                $post = $post->first();
                $post->update(['views' => (int) $post->views + 1]);
                $page = $post->category->slug;
                return view('frontend.post', compact('post', 'page'));
            }

        }
    }
}
