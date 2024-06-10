<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return view("sections.posts.posts-page");
    }

    public function create()
    {
        return view("sections.posts.create-post");
    }
}
