<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                             $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int                             $post_id
 * @property int                             $user_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostUserLike whereUserId($value)
 */
class PostUserLike extends Model
{
    use HasFactory;

    protected $table = 'likes';

    protected $guarded = false;
}
