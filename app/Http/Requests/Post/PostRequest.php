<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "string"],
            "category_id" => ["required", "integer"],
            "published_at" => ["nullable"],
            "content" => ["required", "string"],
        ];
    }

    public function messages(): array
    {
        return [
            "title.requried" => "Titulo não pode estar vazio",
            "title.string" => "Titulo deve conter letras",
            "category_id.required" => "Categoria não pode estar vazia",
            "content.required" => "Conteudo não pode estar em branco"
        ];
    }
}
