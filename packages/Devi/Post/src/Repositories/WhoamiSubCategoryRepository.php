<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class WhoamiSubCategoryRepository extends Repository
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
        return 'Devi\Post\Contracts\WhoamiSubCategory';
    }

    /**
     * @param array $data
     * @return \Devi\Post\Contracts\WhoamiSubCategory
     */
    public function create(array $data)
    {
        $WhoamiSubCategory = parent::create($data);

        return $WhoamiSubCategory;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Post\Contracts\WhoamiSubCategory
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $WhoamiSubCategory = parent::update($data, $id);

        return $WhoamiSubCategory;
    }
}
