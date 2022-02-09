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
    
    public function home(){
        
        $total_register = RegisterModel::select(DB::raw('SUM(amount) as total_register'))->get();
        $dateY = date('Y');
        $year_register = RegisterModel::select(DB::raw('SUM(amount) as year_register'))->where(DB::raw('YEAR(save_date)'), '=', $dateY)->get();
        $dateM = date('m');
        $month_register = RegisterModel::select(DB::raw('SUM(amount) as month_register'))->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $date = date('Y-m-d');
        $today_register = RegisterModel::select(DB::raw('SUM(amount) as today_register'))->where('save_date', $date)->get();

        $register_one = RegisterModel::select(DB::raw('SUM(amount) as register_one'))->where(DB::raw('product_category'), '=', 'Resistors(SMD)')->get();
        $register_two = RegisterModel::select(DB::raw('SUM(amount) as register_two'))->where(DB::raw('product_category'), '=', 'Low Resistance/Current Sense Shunt Resistors')->get();
        $register_three = RegisterModel::select(DB::raw('SUM(amount) as register_three'))->where(DB::raw('product_category'), '=', 'Resistors(Leaded)')->get();
        $register_four = RegisterModel::select(DB::raw('SUM(amount) as register_four'))->where(DB::raw('product_category'), '=', 'Thermistors Thermal Sensors')->get();
        $register_five = RegisterModel::select(DB::raw('SUM(amount) as register_five'))->where(DB::raw('product_category'), '=', 'Inductors')->get();
        $register_six = RegisterModel::select(DB::raw('SUM(amount) as register_six'))->where(DB::raw('product_category'), '=', 'Fuses')->get();
        $register_seven = RegisterModel::select(DB::raw('SUM(amount) as register_seven'))->where(DB::raw('product_category'), '=', 'Varistors')->get();
        $register_eight = RegisterModel::select(DB::raw('SUM(amount) as register_eight'))->where(DB::raw('product_category'), '=', 'LTCC Substrates')->get();
        $register_nine = RegisterModel::select(DB::raw('SUM(amount) as register_nine'))->where(DB::raw('product_category'), '=', 'Others')->get();
        return view('layouts/backend/index')->with('total_register',$total_register)->with('year_register',$year_register)->with('month_register',$month_register)->with('today_register',$today_register)->with('register_one',$register_one)->with('register_two',$register_two)->with('register_three',$register_three)->with('register_four',$register_four)->with('register_five',$register_five)->with('register_six',$register_six)->with('register_seven',$register_seven)->with('register_eight',$register_eight)->with('register_nine',$register_nine);
    }
}