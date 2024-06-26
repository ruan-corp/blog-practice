<?php

namespace App\Http\Controllers;

use App\Http\Requests\Writer\WriterRequest;
use App\Http\Requests\Writer\WriterUpdatePasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WritersController extends Controller
{
    public function create()
    {
        if (!Auth::user()->is_admin) return redirect()->back()->with('message', ['error' => 'Apenas admnistradores podem accesar esta pagina']);

        return view("pages.writers.writers-create");
    }

    public function store(WriterRequest $request)
    {
        $validatedData = $request->validated();

        User::create($validatedData);

        return redirect()->route("home")->with("message", ["success" => 'Usuario registrado com successo']);
    }

    public function edit($id)
    {
        $user = User::query()->findOrFail($id);

        return view("pages.writers.writers-edit", ['user' => $user]);
    }

    public function update(WriterRequest $request, $id)
    {
        $user = User::query()->findOrFail($id);

        $validatedData = $request->validated();

        $user->update($validatedData);

        return redirect()->route('home')->with('message', ['success' => 'Escritor atualizado com successo']);
    }

    public function updatePassword(WriterUpdatePasswordRequest $request, $userId)
    {
        $user = User::query()->findOrFail($userId);

        $validatedData = $request->validated();

        $user->update($validatedData);

        return redirect()->route('home')->with('message', ['success' => 'Escritor atualizado com successo']);
    }
}
