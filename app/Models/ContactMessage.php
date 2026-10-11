<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'email', 'subject', 'message', 'status', 'sent_at'];

    protected function casts(): array
    {
        return ['sent_at' => 'datetime'];
    }
}
