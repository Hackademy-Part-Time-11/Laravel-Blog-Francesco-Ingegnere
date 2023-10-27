<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|max:150',
            'category_id' => 'required',
            'description' => 'required|max:150',
            'body' => 'required|max:5000'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di :max caratteri',
            'category_id.required' => 'La categoria è obbligatoria',
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'La descrizione non può essere più lungo di :max caratteri',
            'body.required' => 'Il corpo dell\'articolo è obbligatorio',
            'body.max' => 'Il corpo dell\'articolo non può essere più lungo di :max caratteri',
        ];
    }
}
