<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    protected $table = 'users';
    protected $fillable = ['id_user','username','password',];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timestamp = false;
}
