<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostalModel extends Model
{
    protected $table = 'zip_code';
    protected $primaryKey = 'id_zip_code';
    protected $fillable = ['id_zip_code','zip_code_en','zip_code_th'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
