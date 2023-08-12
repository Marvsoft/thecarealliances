<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoami extends Model
{
    use HasFactory;

    protected $table = 'who_am_i_sub_category';

    protected $guarded = [];

    public function getCategory(){
        return $this->hasOne(WhoamIPage::class, 'id', 'who_am_i_page_id');
    }
}
