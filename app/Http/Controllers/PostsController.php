<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Throwable;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::query()->get();

        return view("sections.posts.posts-page", ["posts" => $posts]);
    }

    public function show(int $id)
    {
        try {
            $post = Post::query()->findOrFail($id);
            $categories = Category::query()->get();

            return view("sections.posts.edit-post", ["post" => $post, "categories" => $categories]);
        } catch (Throwable $th) {
            return redirect()->back()->with("message", ["error" => "Não foi possivel encontrar o post"]);
        }
    }

    public function create()
    {
        $categories = Category::query()->get();

        return view("sections.posts.create-post", ["categories" => $categories]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        Post::create($validatedData);

        return redirect()->route('posts.posts')->with('message', ['success' => 'post criado com successo']);
    }

    public function update(PostRequest $postRequest)
    {
        try {
            $post = Post::query()->findOrFail($postRequest->id);
            $validatedData = $postRequest->validated();
            $post->update($validatedData);

            return redirect()->route('posts.posts')->with('message', ['success' => 'Post atualizado com successo']);
        } catch (Throwable $th) {
            return redirect()->back()->with('message', ['error' => 'Ocorreu algum erro por favor tente novamente']);
        }
    }

    public function destroy(int $id)
    {
        try {
            $post = Post::query()->findOrFail($id);
            if (!$post->published_at) {
                $post->delete();
                return redirect()->route('posts.posts')->with('message', ['success' => 'Post removido com successo']);
            } else {
                return redirect()->back()->with('message', ['error' => 'Não se pode deletar posts já publicados']);
            }
        } catch (Throwable $th) {
            return redirect()->back()->with('message', ['error' => 'Não foi possivel encontrar o post']);
        }
    }
}
