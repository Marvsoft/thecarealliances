<?php

namespace Devi\Post\Providers;

use Devi\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Devi\Post\Models\Post::class,
        \Devi\Post\Models\Category::class,
        \Devi\Post\Models\Tag::class,
        \Devi\Post\Models\PostTag::class,
        \Devi\Post\Models\WhoAmI::class,
        \Devi\Post\Models\WhoamiSubCategory::class,
    ];
}
