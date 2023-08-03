<?php

namespace Devi\Core\Providers;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Devi\Core\Models\CoreConfig::class,
        \Devi\Core\Models\Country::class,
        \Devi\Core\Models\CountryState::class,
    ];
}