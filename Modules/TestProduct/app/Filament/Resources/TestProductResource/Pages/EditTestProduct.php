<?php

namespace Modules\TestProduct\Filament\Resources\TestProductResource\Pages;

use Modules\TestProduct\Filament\Resources\TestProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestProduct extends EditRecord
{
    protected static string $resource = TestProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
