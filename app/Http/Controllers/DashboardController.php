<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RegisterReportExport;
use App\Exports\RegisterReportExport2;
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

        $register_one = RegisterModel::select(DB::raw('SUM(amount) as register_one'))->where(DB::raw('product_category'), '=', 'Resistors(SMD)')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_two = RegisterModel::select(DB::raw('SUM(amount) as register_two'))->where(DB::raw('product_category'), '=', 'Low Resistance/Current Sense Shunt Resistors')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_three = RegisterModel::select(DB::raw('SUM(amount) as register_three'))->where(DB::raw('product_category'), '=', 'Resistors(Leaded)')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_four = RegisterModel::select(DB::raw('SUM(amount) as register_four'))->where(DB::raw('product_category'), '=', 'Thermistors Thermal Sensors')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_five = RegisterModel::select(DB::raw('SUM(amount) as register_five'))->where(DB::raw('product_category'), '=', 'Inductors')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_six = RegisterModel::select(DB::raw('SUM(amount) as register_six'))->where(DB::raw('product_category'), '=', 'Fuses')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_seven = RegisterModel::select(DB::raw('SUM(amount) as register_seven'))->where(DB::raw('product_category'), '=', 'Varistors')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_eight = RegisterModel::select(DB::raw('SUM(amount) as register_eight'))->where(DB::raw('product_category'), '=', 'LTCC Substrates')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $register_nine = RegisterModel::select(DB::raw('SUM(amount) as register_nine'))->where(DB::raw('product_category'), '=', 'Others')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $result = RegisterModel::where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->orderBy('id', 'DESC')->get();
        return view('layouts/backend/index')->with('result',$result)->with('total_register',$total_register)->with('year_register',$year_register)->with('month_register',$month_register)->with('today_register',$today_register)->with('register_one',$register_one)->with('register_two',$register_two)->with('register_three',$register_three)->with('register_four',$register_four)->with('register_five',$register_five)->with('register_six',$register_six)->with('register_seven',$register_seven)->with('register_eight',$register_eight)->with('register_nine',$register_nine);
    }

    public function search(request $request){

      
		$id_user = '';
		$d_from = $request->date_from;
	 	if($d_from == ''){
            $date_from = '01-'.date('m-Y');
	 	}else{
            $date_from = $d_from;
		}
	 	$d_to = $request->date_to;
	 	if($d_to == ''){
            $date_to =  date('t-m-Y',strtotime('01-'.date('m-Y')));
	 	}else{
			$date_to = $d_to;
		}
		
        $total_register = RegisterModel::select(DB::raw('SUM(amount) as total_register'))->get();
        $dateY = date('Y');
        $year_register = RegisterModel::select(DB::raw('SUM(amount) as year_register'))->where(DB::raw('YEAR(save_date)'), '=', $dateY)->get();
        $result = RegisterModel::where(DB::raw('YEAR(save_date)'), '=', $dateY)->get();
        $dateM = date('m');
        $month_register = RegisterModel::select(DB::raw('SUM(amount) as month_register'))->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        $date = date('Y-m-d');
        $today_register = RegisterModel::select(DB::raw('SUM(amount) as today_register'))->where('save_date', $date)->get();

        $register_one = RegisterModel::select(DB::raw('SUM(amount) as register_one'))->where(DB::raw('product_category'), '=', 'Resistors(SMD)')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_two = RegisterModel::select(DB::raw('SUM(amount) as register_two'))->where(DB::raw('product_category'), '=', 'Low Resistance/Current Sense Shunt Resistors')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_three = RegisterModel::select(DB::raw('SUM(amount) as register_three'))->where(DB::raw('product_category'), '=', 'Resistors(Leaded)')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_four = RegisterModel::select(DB::raw('SUM(amount) as register_four'))->where(DB::raw('product_category'), '=', 'Thermistors Thermal Sensors')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_five = RegisterModel::select(DB::raw('SUM(amount) as register_five'))->where(DB::raw('product_category'), '=', 'Inductors')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_six = RegisterModel::select(DB::raw('SUM(amount) as register_six'))->where(DB::raw('product_category'), '=', 'Fuses')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_seven = RegisterModel::select(DB::raw('SUM(amount) as register_seven'))->where(DB::raw('product_category'), '=', 'Varistors')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_eight = RegisterModel::select(DB::raw('SUM(amount) as register_eight'))->where(DB::raw('product_category'), '=', 'LTCC Substrates')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
        $register_nine = RegisterModel::select(DB::raw('SUM(amount) as register_nine'))->where(DB::raw('product_category'), '=', 'Others')->where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->get();
		$result = RegisterModel::where(DB::raw('save_date'), '>=', $date_from)->where(DB::raw('save_date'), '<=', $date_to)->orderBy('id', 'DESC')->get();
        return view('layouts/backend/index')->with('d_from', $d_from)->with('d_to', $d_to)->with('result',$result)->with('total_register',$total_register)->with('year_register',$year_register)->with('month_register',$month_register)->with('today_register',$today_register)->with('register_one',$register_one)->with('register_two',$register_two)->with('register_three',$register_three)->with('register_four',$register_four)->with('register_five',$register_five)->with('register_six',$register_six)->with('register_seven',$register_seven)->with('register_eight',$register_eight)->with('register_nine',$register_nine);
	}

    public function fileExport(Request $request)
    {
        $d_from = $request->date_from;
        if($d_from == ''){
           $date_from = '01-'.date('m-Y');
        }else{
           $date_from = $d_from;
       }
        $d_to = $request->date_to;
        if($d_to == ''){
           $date_to =  date('t-m-Y',strtotime('01-'.date('m-Y')));
        }else{
           $date_to = $d_to;
       }
    //    request('date_from');
        return Excel::download(new RegisterReportExport($d_from,$d_to,$date_from,$date_to), 'Register-report.xlsx');
        
    }

    public function fileExport2(Request $request)
    {
        
        return Excel::download(new RegisterReportExport2, 'Register-report.xlsx');
        
    }
}
