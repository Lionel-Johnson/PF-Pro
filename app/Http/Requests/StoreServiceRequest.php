<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'title' => ['required','string','max:255'],

            'excerpt' => ['nullable','string'],

            'description' => ['nullable','string'],

            'icon' => ['nullable','string'],

            'image' => ['nullable','image','max:4096'],

            'position' => ['required','integer'],

            'featured' => ['nullable','boolean'],

            'is_active' => ['nullable','boolean']

        ];
    }
}