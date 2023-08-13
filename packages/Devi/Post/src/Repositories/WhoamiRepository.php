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
        return 'Devi\Post\Contracts\WhoAmI';
    }

    /**
     * @param array $data
     * @return \Devi\Post\Contracts\WhoAmI
     */
    public function create(array $data)
    {
        $WhoAmI = parent::create($data);

        return $WhoAmI;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Post\Contracts\WhoAmI
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $WhoAmI = parent::update($data, $id);

        return $WhoAmI;
    }
}
