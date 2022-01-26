<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bannerModel extends Model
{
    protected $table = 'banner';
    protected $primaryKey = 'id_banner';
    protected $fillable = ['id_banner','image_banner','image_banner2'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
