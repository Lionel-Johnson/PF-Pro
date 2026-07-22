<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [

        'site_name',

        'tagline',

        'logo',

        'favicon',

        'phone',

        'email',

        'address',

        'city',

        'country',

        'facebook',

        'linkedin',

        'youtube',

        'instagram',

        'whatsapp',

        'hero_video',

        'hero_image',

        'primary_color',

        'secondary_color',

        'accent_color',

        'footer_text',

        'copyright'

    ];
}