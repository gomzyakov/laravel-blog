<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostView extends EloquentModel
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_agent',
        'post_id',
        'user_id',
    ];
}
