<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnterpriseRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Règles de validation.
     */
    public function rules(): array
    {
        return [
            'name'       => ['required', 'string', 'max:255'],
            'legal_name' => ['nullable', 'string', 'max:255'],

            'slug'       => [
                'required',
                'string',
                'max:255',
                'unique:enterprises,slug',
            ],

            'nif'        => [
                'nullable',
                'string',
                'max:50',
                'unique:enterprises,nif',
            ],

            'rccm'       => [
                'nullable',
                'string',
                'max:100',
                'unique:enterprises,rccm',
            ],

            'email'      => [
                'nullable',
                'email:rfc,dns',
                'max:255',
            ],

            'phone'      => [
                'nullable',
                'string',
                'max:30',
            ],

            'website'    => [
                'nullable',
                'url',
                'max:255',
            ],

            'country'    => [
                'required',
                'string',
                'max:100',
            ],

            'city'       => [
                'nullable',
                'string',
                'max:100',
            ],

            'address'    => [
                'nullable',
                'string',
                'max:500',
            ],

            'logo'       => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'is_active'  => [
                'sometimes',
                'boolean',
            ],
        ];
    }
}