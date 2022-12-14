<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
 use Illuminate\Auth\Authenticatable;
 use Illuminate\Auth\Passwords\CanResetPassword;
 use Illuminate\Foundation\Auth\Access\Authorizable;
 use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
 use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Sanctum\HasApiTokens;

class User extends Eloquent implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword,HasApiTokens;
//    public function role(){
//     return $this->belongsTo(Role::class,'role','role_key');
//    }
}
