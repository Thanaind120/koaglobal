<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\RegisterModel;
use App\Models\bannerModel;
use App\Models\MasterSetupModel;
use App\Models\ProductCategoryModel;
use App\Models\NewsModel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(){}

    public function index(){
        $banner = bannerModel::get();
        $product_category = ProductCategoryModel::get();
        $news = DB::table('news')
        ->leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->get();
        return view('layouts/frontend/index')->with('banner', $banner)->with('news', $news)->with('product_category', $product_category);
    }
    
    public function home(){
        
        $total_register = RegisterModel::select(DB::raw('SUM(amount) as total_register'))->get();
        $dateY = date('Y');
        $year_register = RegisterModel::select(DB::raw('SUM(amount) as year_register'))->where(DB::raw('YEAR(save_date)'), '=', $dateY)->get();
        $dateM = date('m');
        $month_register = RegisterModel::select(DB::raw('SUM(amount) as month_register'))->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $date = date('Y-m-d');
        $today_register = RegisterModel::select(DB::raw('SUM(amount) as today_register'))->where('save_date', $date)->get();

        return view('layouts/backend/index')->with('total_register',$total_register)->with('year_register',$year_register)->with('month_register',$month_register)->with('today_register',$today_register);
    }
}