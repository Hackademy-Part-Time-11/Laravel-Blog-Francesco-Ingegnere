<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'author' => 'required|max:150',
            'genre' => 'required|max:40',
            'year' => 'required|max:4',
            'description' => 'required|max:500',
        ];
    }


    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Il titolo non può essere più lungo di :max caratteri',
            'author.required' => 'L\'autore è obbligatorio',
            'author.max' => 'L\'autore non può essere più lungo di :max caratteri',
            'genre.required' => 'Il genere è obbligatorio',
            'genre.max' => 'Il genere non può essere più lungo di :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'La descrizione non può essere più lungo di :max caratteri',
            'year.required' => 'L\'anno è obbligatorio',
            'year.max' => 'L\'anno non può essere più lungo di :max caratteri',
        ];
    }
}
