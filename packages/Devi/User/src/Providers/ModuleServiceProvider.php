<?php

namespace Devi\User\Providers;

use Devi\Core\Providers\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Devi\User\Models\Group::class,
        \Devi\User\Models\Role::class,
        \Devi\User\Models\User::class,
    ];
}