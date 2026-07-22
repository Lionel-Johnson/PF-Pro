<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [

        'title',

        'subtitle',

        'description',

        'background_image',

        'background_video',

        'primary_button_text',

        'primary_button_url',

        'secondary_button_text',

        'secondary_button_url',

        'is_active'

    ];

    protected $casts = [

        'is_active' => 'boolean',

    ];
}