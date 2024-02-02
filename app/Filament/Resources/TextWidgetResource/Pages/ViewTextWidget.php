<?php

namespace App\Filament\Resources\TextWidgetResource\Pages;

use App\Filament\Resources\TextWidgetResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Override;

class ViewTextWidget extends ViewRecord
{
    protected static string $resource = TextWidgetResource::class;

    #[Override]
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
