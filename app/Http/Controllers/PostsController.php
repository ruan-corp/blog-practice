<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index()
    {
        return view("sections.posts.posts-page");
    }

    public function create()
    {
        $categories = Category::query()->get();

        return view("sections.posts.create-post", ["categories" => $categories]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $this->storePost($validatedData);

        return redirect()->back()->with("success", "post criado com successo");
    }

    private function storePost(array $validatedData)
    {
        $post = new Post($validatedData);
        $post->user_id = Auth::user()->id;
        if (isset($validatedData["published_at"])) {
            $post->published_at = now();
        }
        $post->save();
    }
}
