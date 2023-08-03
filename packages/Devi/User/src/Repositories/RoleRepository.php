<?php

namespace Devi\User\Repositories;

use Devi\Core\Eloquent\Repository;

class RoleRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Devi\User\Contracts\Role';
    }
}