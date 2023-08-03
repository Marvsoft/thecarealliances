<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Devi\Post\Contracts\Category as CategoryContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model implements CategoryContract
{
    use HasFactory;

    use SoftDeletes;
    
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug', 
        'parent_id',
        'status',
    ];
}
