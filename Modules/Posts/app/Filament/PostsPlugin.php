<?php

namespace Modules\Posts\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class PostsPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Posts';
    }

    public function getId(): string
    {
        return 'posts';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
