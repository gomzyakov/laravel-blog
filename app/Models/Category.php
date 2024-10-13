<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends EloquentModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'categories';

    protected $guarded = false;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
