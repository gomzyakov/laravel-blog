<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int                             $id
 * @property int                             $is_upvote
 * @property int                             $post_id
 * @property int                             $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote query()
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereIsUpvote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UpvoteDownvote whereUserId($value)
 *
 * @mixin Eloquent
 */
class UpvoteDownvote extends EloquentModel
{
    use HasFactory;

    protected $fillable = ['is_upvote', 'post_id', 'user_id'];
}
