<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSetupModel extends Model
{
    protected $table = 'news_release';
    protected $primaryKey = 'id_news_release';
    protected $fillable = ['id_news_release','news_release_topics_en','news_release_topics_th','news_release_name_en','news_release_name_th'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
