<?php

namespace App\Http\Controllers;


use App\Category;
use App\Client;
use App\Post;
use App\Question;
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
        if ($request->input('q')) {
            $keyword = $request->input('q');
            $posts = Post::publish()->where('title', 'LIKE', '%' . $keyword . '%')->paginate(10);
            return view('frontend.search', compact('posts', 'keyword'));
        }
    }

    public function question($value = null)
    {
        $page = 'faq';
        $questions = Question::publish()->paginate(10);
        return view('frontend.question', compact('questions', 'page'));
    }

    public function main($value)
    {
        
        if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
            $post = Post::where('slug', $matches[1])->first();
            $post->update(['views' => (int) $post->views + 1]);
            $page = $post->category->slug;
            return view('frontend.post', compact('post', 'page'));
        } else {

            $category = Category::where('slug', $value)->first();

            if ($category->subCategories->count() == 0) {
                //child categories
                $posts = Post::publish()
                    ->where('category_id', $category->id)
                    ->latest('updated_at')
                    ->paginate(10);

            } else {
                //parent categories
                $posts = Post::publish()
                    ->whereIn('category_id', $category->subCategories->lists('id')->all())
                    ->latest('updated_at')
                    ->paginate(10);

            }
            $page = $category->slug;
            return view('frontend.category', compact(
                'category', 'posts', 'page'
            ));
        }
    }
}
