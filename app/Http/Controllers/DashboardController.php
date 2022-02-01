<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\RegisterModel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct(){}
    
    public function home(){
        
        $dateY = date('Y');
        $total_register = RegisterModel::select(DB::raw('SUM(amount) as total_register'))->where(DB::raw('YEAR(save_date)'), '=', $dateY)->get();
        $date = date('Y-m-d');
        $today_register = RegisterModel::select(DB::raw('SUM(amount) as today_register'))->where('save_date', $date)->get();

        return view('layouts/backend/index')->with('total_register',$total_register)->with('today_register',$today_register);
    }
}