<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

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
