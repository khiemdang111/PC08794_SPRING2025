<?php

namespace Modules\TestProduct\Filament\Resources\TestProductResource\Pages;

use Modules\TestProduct\Filament\Resources\TestProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestProducts extends ListRecords
{
    protected static string $resource = TestProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
