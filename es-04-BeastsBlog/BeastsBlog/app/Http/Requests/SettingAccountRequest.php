<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingAccountRequest extends FormRequest
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
            'name' => 'required|max:150',
            'password' => 'required|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il Nome Utente è obbligatorio',
            'name.max' => 'Il Nome Utente non può essere più lungo di :max caratteri',
            'password.required' => 'La password è obbligatoria',
            'password.max' => 'La password non può essere più lungo di :max caratteri',
        ];
    }
}
