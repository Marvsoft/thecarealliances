<?php

namespace Devi\Core\Models;

use Illuminate\Database\Eloquent\Model;
use Devi\Core\Contracts\Country as CountryContract;

class Country extends Model implements CountryContract
{
    public $timestamps = false;
}