<?php

namespace Devi\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Devi\Core\Contracts\CountryState as CountryStateContract;

class CountryState extends Model implements CountryStateContract
{
    public $timestamps = false;
}