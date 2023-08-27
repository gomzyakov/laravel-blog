<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends EloquentModel
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function publishedPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class)
            ->where('active', '=', 1)
            ->whereDate('published_at', '<', Carbon::now());
    }
}
