<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class PostRepository extends Repository
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
        return 'Devi\Post\Contracts\Post';
    }

    /**
     * @param array $data
     * @return \Devi\Post\Contracts\Post
     */
    public function create(array $data)
    {
        $post = parent::create($data);

        return $post;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\Post\Contracts\Post
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $Post = parent::update($data, $id);

        return $Post;
    }

}