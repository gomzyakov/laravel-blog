<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

/**
 * @property int                             $id
 * @property string                          $key
 * @property string|null                     $image
 * @property string|null                     $title
 * @property string|null                     $content
 * @property int                             $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget query()
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TextWidget whereUpdatedAt($value)
 *
 * @mixin Eloquent
 */
class TextWidget extends EloquentModel
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active',
    ];

    public static function getTitle(string $key): string
    {
        $widget = TextWidget::query()->where('key', $key)->first();

        if (! $widget) {
            return '';
        }

        return $widget->title;
    }

    public static function getContent(string $key): string
    {
        $widget = Cache::get('text-widget-' . $key, fn () => TextWidget::query()->where('key', $key)->first());

        if (! $widget) {
            return '';
        }

        return $widget->content;
    }
}
