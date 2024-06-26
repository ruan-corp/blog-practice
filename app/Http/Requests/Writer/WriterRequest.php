<?php

namespace App\Http\Requests\Writer;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WriterRequest extends FormRequest
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
        $writerId = $this->route('id');

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($writerId)],
            'password' => ['required', 'sometimes', 'confirmed', 'min:8'],
            'is_admin' => ['sometimes'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo não pode estar vazio',
            'name.string' => 'O nome deve conter letras',
            'email.required' => 'Este campo não pode estar vazio',
            'email.email' => 'Deve ser um email valido',
            'email.unique' => 'Email já cadastrado',
            'password.required' => 'Este campo não pode estar vazio',
            'password.confirmed' => 'As senhas devem ser iguais',
            'password.min' => 'Deve conter pelo menos 8 caracteres'
        ];
    }
}
