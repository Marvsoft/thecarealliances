<?php

namespace Devi\Core\Repositories;

use Devi\Core\Eloquent\Repository;
use Prettus\Repository\Traits\CacheableRepository;

class CountryRepository extends Repository
{
    use CacheableRepository;

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Devi\Core\Contracts\Country';
    }
}