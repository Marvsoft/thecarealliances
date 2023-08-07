<?php

namespace Devi\Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Devi\Post\Contracts\WhoamiSubCategory as WhoAmIContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class WhoamiSubCategory extends Model implements WhoAmIContract
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'who_am_i_sub_category';

    protected $fillable = [
        'header',
        'slug',
        'status',
        'description',
        'who_am_i_page_id',
    ];
}
