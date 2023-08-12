<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharchAddress extends Model
{
    use HasFactory;

    protected $table = 'charch_address';
    
    protected $guarded = [];
}
