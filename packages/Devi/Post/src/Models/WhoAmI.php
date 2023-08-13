<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Devi\Post\Contracts\WhoAmI as WhoAmIContract;
use Illuminate\Database\Eloquent\SoftDeletes;

// implements WhoAmIContract
class WhoAmI extends Model 
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'who_am_i_page';

    protected $fillable = [
        'header',
        'slug',
        'status',
        'description',
    ];
}
