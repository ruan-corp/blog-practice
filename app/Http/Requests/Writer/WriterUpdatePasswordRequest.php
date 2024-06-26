<?php

namespace App\Http\Requests\Writer;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Http\FormRequest;

class WriterUpdatePasswordRequest extends FormRequest
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
        $writer = User::findOrFail($this->writer_id);

        if (!Hash::check($this->current_password, $writer->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Senha Incorreta'],
            ]);
        }

        $rules =  [
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [
            'password.required' => 'Este campo não pode estar vazio',
            'password.confirmed' => 'As senhas devem ser iguais',
            'password.min' => 'Deve conter pelo menos 8 caracteres'
        ];
    }
}
