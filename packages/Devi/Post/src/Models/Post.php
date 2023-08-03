<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Model;
use Devi\Post\Contracts\Post as PostContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model implements PostContract
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
        'cat_id'
    ];

    public function tags()
    {
        return $this->hasMany(PostTag::class, 'post_id', 'id');
    }
}
