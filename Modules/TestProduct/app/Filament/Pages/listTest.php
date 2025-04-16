<?php

namespace Modules\TestProduct\Filament\Pages;

use Filament\Pages\Page;

class listTest extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'testproduct::filament.pages.list-test';
}
