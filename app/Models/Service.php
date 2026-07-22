<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'title',

        'slug',

        'icon',

        'image',

        'excerpt',

        'description',

        'position',

        'featured',

        'is_active'

    ];

    protected $casts = [

        'featured' => 'boolean',

        'is_active' => 'boolean'

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {

            if (empty($service->slug)) {

                $service->slug = Str::slug($service->title);

            }

        });

    }
}