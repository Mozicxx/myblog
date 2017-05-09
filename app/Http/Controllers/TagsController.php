<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = new Paginator($tag->posts, 5);

    	return view('posts.index', compact('posts'));
    }
}
