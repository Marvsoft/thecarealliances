<?php

namespace Devi\Admin\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'contacts.person.create.after' => [
            'Devi\Admin\Listeners\Person@linkToEmail'
        ],

        'lead.create.after' => [
            'Devi\Admin\Listeners\Lead@linkToEmail'
        ],
    ];
}