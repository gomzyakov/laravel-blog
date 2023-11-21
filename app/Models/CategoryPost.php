<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryPost query()
 *
 * @mixin Eloquent
 */
class CategoryPost extends EloquentModel
{
    use HasFactory;

    protected $table = 'category_posts';
}
