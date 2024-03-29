<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TextWidgetResource\Pages;
use App\Models\TextWidget;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Override;

class TextWidgetResource extends Resource
{
    protected static ?string $model = TextWidget::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    #[Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('title')
                    ->maxLength(2048),
                Forms\Components\RichEditor::make('content'),
                Forms\Components\Toggle::make('active')
                    ->required(),
            ])->columns(1);
    }

    #[Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    #[Override]
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListTextWidgets::route('/'),
            'create' => Pages\CreateTextWidget::route('/create'),
            'view'   => Pages\ViewTextWidget::route('/{record}'),
            'edit'   => Pages\EditTextWidget::route('/{record}/edit'),
        ];
    }
}
