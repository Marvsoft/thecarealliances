<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoamIPage extends Model
{
    use HasFactory;

    protected $table = 'who_am_i_page';

    protected $guarded = [];

    public function getSubCategory(){
        return $this->hasMany(Whoami::class, 'who_am_i_page_id', 'id');
    }
}
