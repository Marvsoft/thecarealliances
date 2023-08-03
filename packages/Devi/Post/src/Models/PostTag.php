<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Devi\Post\Contracts\PostTag as PostTagContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostTag extends Model implements PostTagContract
{
    use HasFactory;

    protected $fillable  = [
        'post_id',
        'tag_id'
    ];

    public $timestamps = false;
}
