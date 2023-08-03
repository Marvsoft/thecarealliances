<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class WhoamiRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @param  \Illuminate\Container\Container  $container
     * @return void
     */
    public function __construct(
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Devi\Post\Contracts\Whoami';
    }

    /**
     * @param array $data
     * @return \Devi\Post\Contracts\Whoami
     */
    public function create(array $data)
    {
        $Whoami = parent::create($data);

        return $Whoami;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Post\Contracts\Whoami
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $Whoami = parent::update($data, $id);

        return $Whoami;
    }
}
