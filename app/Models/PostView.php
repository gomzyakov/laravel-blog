<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property string      $ip_address
 * @property string      $user_agent
 * @property int         $post_id
 * @property int|null    $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostView newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostView whereUserId($value)
 *
 * @mixin Eloquent
 */
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
