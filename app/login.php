<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class login extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    protected $fillable = [
        'username','password'
    ];
/*     protected $hidden = [
        'password', 'remember_token',
    ]; */

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timestamp = false;

}