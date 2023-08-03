<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class CategoryRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @param  \Illuminate\Container\Container  $container
     * @return void
     */
    public function __construct(
        Container $container
    )
    {
        parent::__construct($container);
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Devi\Post\Contracts\Category';
    }

    /**
     * @param array $data
     * @return \Devi\Category\Contracts\Category
     */
    public function create(array $data)
    {
        $Category = parent::create($data);

        return $Category;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Category\Contracts\Category
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $Category = parent::update($data, $id);

        return $Category;
    }

}