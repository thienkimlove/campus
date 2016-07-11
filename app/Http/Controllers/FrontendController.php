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
use Illuminate\Http\Request;
use App\Http\Requests;


class FrontendController extends Controller
{

    public function index()
    {
        $page = 'index';
        $clients  = Client::all();
        $orientationCategory = Category::where('slug', 'huong-nghiep')->first();
        return view('frontend.index', compact('page', 'clients', 'orientationCategory'));
    }

    public function campus()
    {
        $page = 'campus';
        $cities = City::all();
        $rightClubs = Club::where('status', true)->get();

        $category = Category::where('slug', 'campus')->get();
        $categoryId = null;
        if ($category->count() > 0) {
            $categoryId = $category->first();
        }
        $posts = null;
        if ($categoryId) {
            $posts = Post::where('category_id', $categoryId)->latest('updated_at')->limit(4)->get();
        }

        $questions = Question::all();
        
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

        $cities = City::all();

        if ($request->input('q')) {
            $clubs = Club::where('name', 'LIKE', '%' . $request->input('q') . '%')->paginate(10);
            return view('frontend.search', compact('clubs', 'cities', 'page'));
        } else if ($request->input('uni')) {

            $university = University::where('slug', $request->input('uni'))->get();

            if ($university->count() > 0) {

                $clubs = Club::where('university_id', $university->first()->id)->paginate(10);

                return view('frontend.search', compact('clubs', 'page', 'cities'));
            }
        } else {
            $clubs = Club::latest('updated_at')->paginate(10);

            return view('frontend.search', compact('clubs', 'page', 'cities'));
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
        $cities = City::all();
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
            $post = Post::where('slug', $matches[1])->first();
            $post->update(['views' => (int) $post->views + 1]);
            $page = $post->category->slug;
            return view('frontend.post', compact('post', 'page'));
        }
    }
}
