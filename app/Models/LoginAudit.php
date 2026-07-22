<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAudit extends Model
{
    protected $fillable = [

        'user_id',

        'ip_address',

        'user_agent',

        'success',

        'logged_at'

    ];

    protected function casts(): array
    {
        return [

            'logged_at'=>'datetime',

            'success'=>'boolean'

        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}