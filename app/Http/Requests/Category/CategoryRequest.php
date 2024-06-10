<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        $rules = [
            "name" => ["required", "max:255", "string", Rule::unique('categories')->ignore($this->id)],
            "description" => ["nullable", "max:255", "string"]
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'É necessário um nome',
            'name.unique' => 'Já existe uma categoria com este nome',
            'description.max' => 'Limite de 255 caracteres',
        ];
    }
}
