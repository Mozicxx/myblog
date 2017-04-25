<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //
	public function store(Post $post)
	{
		$this->validate(request(), [
			'content' => 'required|min:5'
		]);

		$post->addComment(request('content'));

		return back();
	}
}
