<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $fillable = ['id_news','id_news_releases','id_archives','save_date','news_name_en','news_name_th','image'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
