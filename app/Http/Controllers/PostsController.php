<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use App\Helpers\Common;
use App\Repository\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {

        $posts = Post::latest()->filter(request(['month','year']))->paginate(5);

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	//create a new post using the request data
    	$this->validate(request(), [
			'title' => 'required',
			'content' => 'required'
		]);
    	//save it in the database
        auth()->user()->publish(
            new Post(request(['title', 'content']))
        );
    	// Post::create([
     //        'title' => request('title'), 
     //        'content' => request('content'),
     //        'user_id' => auth()->id(), //auth()->user()->id 
     //    ]);
        session()->flash('message','Your post has now been published');
    	//and then redirect to the homepage(post list)
    	return redirect()->home();
    }
}
