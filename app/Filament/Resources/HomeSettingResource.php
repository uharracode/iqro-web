<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeSetting;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeSettingResource\Pages;
use App\Filament\Resources\HomeSettingResource\RelationManagers;

class HomeSettingResource extends Resource
{
    protected static ?string $model = HomeSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textinput::make('title'),
                Textinput::make('path_image')->default(''),
                Textinput::make('path_video')->default(''),
                Textinput::make('url_click')->default(''),
                Textinput::make('type'),
                Textinput::make('posisi'),
                Textinput::make('created_by'),
                Textinput::make('updated_by'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('path_image'),
                TextColumn::make('path_video'),
                TextColumn::make('url_click'),
                TextColumn::make('type'),
                TextColumn::make('posisi'),
                TextColumn::make('created_by'),
                TextColumn::make('updated_by'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageHomeSettings::route('/'),
        ];
    }    
}
