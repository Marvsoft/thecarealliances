<?php

namespace Devi\Post\Repositories;

use Illuminate\Container\Container;
use Devi\Core\Eloquent\Repository;

class PostTagRepository extends Repository
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
        return 'Devi\Post\Contracts\PostTag';
    }

    /**
     * @param array $data
     * @return \Devi\PostTag\Contracts\PostTag
     */
    public function create(array $data)
    {
        $PostTag = parent::create($data);

        return $PostTag;
    }

    /**
     * @param array  $data
     * @param int    $id
     * @param string $attribute
     * @return \Devi\PostTag\Contracts\PostTag
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $PostTag = parent::update($data, $id);

        return $PostTag;
    }

    /**
     * Create Post Tags
     * 
     * @param  array  $tags
     * @param  int  $postId
     * @return void
     */
    public function createPostTag($tags, $postId) 
    {
        foreach((array) $tags as $tag) {
            if (! $tag) {
                continue;
            }
            
            parent::create([
                'post_id' => $postId,
                'tag_id'  => $tag
            ]);
        }
    }
   
}