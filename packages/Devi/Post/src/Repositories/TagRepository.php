<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class TagRepository extends Repository
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
        return 'Devi\Post\Contracts\Tag';
    }

    /**
     * @param array $data
     * @return \Devi\Tag\Contracts\Tag
     */
    public function create(array $data)
    {
        $tag = parent::create($data);

        return $tag;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Tag\Contracts\Tag
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $Tag = parent::update($data, $id);

        return $Tag;
    }

}