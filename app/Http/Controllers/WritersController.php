<?php

namespace App\Http\Controllers;

use App\Http\Requests\Writer\WriterRequest;
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
}
