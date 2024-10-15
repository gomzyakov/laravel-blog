<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder|CategoryPost newModelQuery()
 * @method static Builder|CategoryPost newQuery()
 * @method static Builder|CategoryPost query()
 */
class CategoryPost extends Model
{
    use HasFactory;

    protected $table = 'category_posts';
}
