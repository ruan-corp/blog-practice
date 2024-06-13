<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::query()->get();

        return view("sections.posts.posts-page", ["posts" => $posts]);
    }

    public function show(int $id)
    {
        $post = Post::query()->findOrFail($id);
        $categories = Category::query()->get();

        return view("sections.posts.edit-post", ["post" => $post, "categories" => $categories]);
    }

    public function create()
    {
        $categories = Category::query()->get();

        return view("sections.posts.create-post", ["categories" => $categories]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $post = Post::create($validatedData);

        return redirect()->route('posts.posts')->with("success", "post criado com successo");
    }

    public function update(PostRequest $postRequest)
    {
        $post = Post::query()->findOrFail($postRequest->id);
        $validatedData = $postRequest->validated();
        $post->update($validatedData);

        return redirect()->route('posts.posts')->with('success', 'Post editado com successo');
    }
}
