<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSetuptwoModel extends Model
{
    protected $table = 'archive';
    protected $primaryKey = 'id_archive';
    protected $fillable = ['id_archive','year'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
