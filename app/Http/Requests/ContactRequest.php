<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'not_regex:/[\r\n]/'],
            'subject' => ['required', 'string', 'max:150', 'not_regex:/[\r\n]/'],
            'message' => ['required', 'string', 'max:2000'],
            'website' => ['nullable', 'string', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Ce champ est obligatoire.',
            'email.email' => 'Veuillez saisir une adresse e-mail valide.',
            '*.max' => 'Ce champ dépasse la longueur autorisée.',
            '*.not_regex' => 'Ce champ contient des caractères non autorisés.',
            'website.max' => 'La demande n’a pas pu être validée.',
        ];
    }
}
