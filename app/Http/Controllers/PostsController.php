<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(15);

        return view("pages.posts.posts-index", ["posts" => $posts]);
    }

    public function edit(int $id)
    {
        $post = Post::query()->findOrFail($id);
        $categories = Category::query()->get();

        return view("pages.posts.posts-edit", ["post" => $post, "categories" => $categories]);
    }

    public function create()
    {
        $categories = Category::query()->get();

        return view("pages.posts.posts-create", ["categories" => $categories]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['published_at'] = $this->getPublishedAt($validatedData);

        Post::create($validatedData);

        return redirect()->route('posts.posts')->with('message', ['success' => 'Post criado com successo']);
    }

    public function update(PostRequest $postRequest)
    {
        $post = Post::query()->findOrFail($postRequest->id);
        $validatedData = $postRequest->validated();
        $validatedData['published_at'] = $this->getPublishedAt($validatedData);
        $post->update($validatedData);

        return redirect()->route('posts.posts')->with('message', ['success' => 'Post atualizado com successo']);
    }

    public function destroy(int $id)
    {
        $post = Post::query()->findOrFail($id);
        if (!$post->published_at) {
            $post->delete();
            return redirect()->route('posts.posts')->with('message', ['success' => 'Post removido com successo']);
        }

        return redirect()->back()->with('message', ['error' => 'Não se pode deletar posts já publicados']);
    }

    private function getPublishedAt(array $validatedData)
    {
        if ($validatedData['published'] == true) {
            return now();
        }
    }
}
