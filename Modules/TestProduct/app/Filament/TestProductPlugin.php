<?php

namespace Modules\TestProduct\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class TestProductPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'TestProduct';
    }

    public function getId(): string
    {
        return 'testproduct';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
