<?php

namespace Modules\TestProduct\Filament\Resources\PostResource\Pages;

use Modules\TestProduct\Filament\Resources\PostResource;
use Filament\Resources\Pages\Page;

class Posts extends Page
{
    protected static string $resource = PostResource::class;

    protected static string $view = 'modules.test-product.filament.resources.post-resource.pages.posts';
}
