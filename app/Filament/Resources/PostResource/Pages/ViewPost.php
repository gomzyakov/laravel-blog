<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Override;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    #[Override]
    protected function getHeaderWidgets(): array
    {
        return [
            PostResource\Widgets\PostOverview::class,
        ];
    }
}
