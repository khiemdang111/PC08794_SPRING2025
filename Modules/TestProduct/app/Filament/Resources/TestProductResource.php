<?php

namespace Modules\TestProduct\Filament\Resources;

use Modules\TestProduct\Filament\Resources\TestProductResource\Pages;
use Modules\TestProduct\Filament\Resources\TestProductResource\RelationManagers;
use Modules\TestProduct\Models\TestProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Modules\TestProduct\Models\TestProductModel;

class TestProductResource extends Resource
{
    protected static ?string $model = TestProductModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestProducts::route('/'),
            'create' => Pages\CreateTestProduct::route('/create'),
            'edit' => Pages\EditTestProduct::route('/{record}/edit'),
        ];
    }
}
