<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationModel extends Model
{
    protected $table = 'application';
    protected $primaryKey = 'id_application';
    protected $fillable = ['id_application','application_name_en','application_name_th'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
