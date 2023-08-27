<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UpvoteDownvote extends EloquentModel
{
    use HasFactory;

    protected $fillable = ['is_upvote', 'post_id', 'user_id'];
}
