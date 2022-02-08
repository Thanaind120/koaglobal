<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','email','tel','product_category','company_name','product_message','save_date','save_time','amount'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
