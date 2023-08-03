<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Devi\Post\Contracts\Tag as TagContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model implements TagContract
{
    use SoftDeletes;

    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status'
    ];
}
