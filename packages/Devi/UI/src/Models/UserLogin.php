<?php

namespace Devi\UI\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Devi\User\Contracts\User as UserContract;

class UserLogin extends Authenticatable implements UserContract
{
    use HasApiTokens, Notifiable;

    protected $table = 'user_login';
    protected $guarded = [];
}
