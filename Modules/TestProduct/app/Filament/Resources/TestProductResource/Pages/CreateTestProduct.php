<?php

namespace Modules\TestProduct\Filament\Resources\TestProductResource\Pages;

use Modules\TestProduct\Filament\Resources\TestProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTestProduct extends CreateRecord
{
    protected static string $resource = TestProductResource::class;
}
