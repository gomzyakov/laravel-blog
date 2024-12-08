<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

/**
 * @property int         $id
 * @property string      $title
 * @property string      $slug
 * @property string      $content
 * @property string|null $preview_image
 * @property string|null $main_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read Collection<int, Category> $categories
 * @property-read int|null $categories_count
 * @property-read string $human_read_time
 * @property-read User $user
 * @property-read Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property-read Collection<int, User> $likedUsers
 * @property-read int|null $liked_users_count
 * @property-read Collection<int, Tag> $tags
 * @property-read int|null $tags_count
 *
 * @method static PostFactory  factory($count = null, $state = [])
 * @method static Builder|Post newModelQuery()
 * @method static Builder|Post newQuery()
 * @method static Builder|Post query()
 * @method static Builder|Post whereActive($value)
 * @method static Builder|Post whereBody($value)
 * @method static Builder|Post whereCreatedAt($value)
 * @method static Builder|Post whereId($value)
 * @method static Builder|Post whereMetaDescription($value)
 * @method static Builder|Post whereMetaTitle($value)
 * @method static Builder|Post wherePublishedAt($value)
 * @method static Builder|Post whereSlug($value)
 * @method static Builder|Post whereThumbnail($value)
 * @method static Builder|Post whereTitle($value)
 * @method static Builder|Post whereUpdatedAt($value)
 * @method static Builder|Post whereUserId($value)
 * @method static Builder|Post onlyTrashed()
 * @method static Builder|Post whereContent($value)
 * @method static Builder|Post whereDeletedAt($value)
 * @method static Builder|Post whereMainImage($value)
 * @method static Builder|Post wherePreviewImage($value)
 * @method static Builder|Post withTrashed()
 * @method static Builder|Post withoutTrashed()
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = false;

    protected $withCount = ['likedUsers'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function likedUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function shortBody($words = 20): string
    {
        return Str::words(strip_tags((string) $this->content), $words);
    }

    public function getFormattedDate(): string
    {
        return $this->created_at->format('F jS Y');
    }

    // todo Use on post page
    public function humanReadTime(): Attribute
    {
        return new Attribute(
            get: function ($value, $attributes): string {
                $words   = Str::wordCount(strip_tags((string) $attributes['body']));
                $minutes = ceil($words / 200);

                return $minutes . ' ' . str('min')->plural($minutes) . ', '
                    . $words . ' ' . str('word')->plural($words);
            }
        );
    }
}
