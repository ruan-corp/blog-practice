<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'name' => 'required|unique:categories,name|max:255',
            'description' => 'nullable|max:255',
        ];
    }

    // public function rules(): array
    // {
    //     $rules = [
    //         'name' => 'required|max:255',
    //         'description' => 'nullable|max:255',
    //     ];

    //     if ($this->has('name')) {
    //         $rules['name'] .= '|' . Rule::unique('categories')->ignore($this->id);
    //     };

    //     return $rules;
    // }

    public function messages(): array
    {
        return [
            'name.required' => 'É necessário um nome',
            'name.unique' => 'Já existe uma categoria com este nome',
            'description.max' => 'Limite de 255 caracteres',
        ];
    }
}
