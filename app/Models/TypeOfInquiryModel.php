<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeOfInquiryModel extends Model
{
    protected $table = 'type_of_iunqiry';
    protected $primaryKey = 'id_iunqiry';
    protected $fillable = ['id_iunqiry','type_iunqiry_en','type_iunqiry_th'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
