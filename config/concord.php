<?php

return [
    'modules' => [
        \Devi\Admin\Providers\ModuleServiceProvider::class,
        \Devi\Core\Providers\ModuleServiceProvider::class,
        \Devi\UI\Providers\ModuleServiceProvider::class,
        \Devi\User\Providers\ModuleServiceProvider::class,
        \Devi\Post\Providers\ModuleServiceProvider::class,
    ],
    'register_route_models' => true
];
