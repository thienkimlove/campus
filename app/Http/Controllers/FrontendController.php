<?php

namespace App\Http\Controllers;


use App\Category;
use App\City;
use App\Client;
use App\Club;
use App\Post;
use App\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;


class FrontendController extends Controller
{

    public function index()
    {
        $page = 'index';
        $clients  = Client::all();
        return view('frontend.index', compact('page', 'clients'));
    }

    public function campus()
    {
        $page = 'campus';
        $cities = City::all();
        $rightClub = Club::where('status', true)->first();

        $questions = Question::all();
        
        return view('frontend.campus', compact('cities', 'page', 'rightClub', 'questions'));
    }

    public function club($value)
    {
        $page = 'club';
        $cities = City::all();
        $club = Club::whereSlug($value)->first();

        return view('frontend.club', compact('cities', 'page', 'club'));
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
        if ($request->input('q')) {
            $keyword = $request->input('q');
            $clubs = Club::where('name', 'LIKE', '%' . $keyword . '%')->paginate(10);
            return view('frontend.search', compact('clubs', 'keyword', 'page'));
        }
    }

    public function question($value = null)
    {
        $page = 'faq';
        $questions = Question::publish()->paginate(10);
        return view('frontend.question', compact('questions', 'page'));
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

            return view('frontend.orientation', compact(
                'category', 'posts', 'page'
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
        } else {

            $club =  Club::where('slug', $value)->first();

            $posts = Post::publish()
                ->where('club_id', $club->id)
                ->latest('updated_at')
                ->paginate(10);

            $page = $club->slug;
            return view('frontend.club', compact(
                'club', 'posts', 'page'
            ));

        }
    }
}
