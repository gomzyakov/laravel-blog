<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends EloquentModel
{
    use HasFactory;

    protected $table = 'comments';

    protected $guarded = false;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDataAsCarbonAttribute()
    {
        return Carbon::parse($this->created_at);
    }
}
