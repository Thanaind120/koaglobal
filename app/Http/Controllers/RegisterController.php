<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\register;
use App\Imports\RegisterImport;
use App\Exports\RegisterExport;
use App\Models\RegisterModel;
use App\Models\ProductCategoryModel;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('layouts/frontend/register');
    }

    public function register()
    {
        $register = RegisterModel::get();
        return view('layouts/backend/register')->with('register',$register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $url = ProductCategoryModel::Join('register', 'product_category.product_category_en', '=', 'register.product_category')->select('product_category.*')->first();
        $date = date('Y-m-d');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        $time = date('H:i:s');
        $newTime = \Carbon\Carbon::createFromFormat('H:i:s', $time)->format('H:i:s');
        $data_insert = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'product_category' => $request->product_category,
            'company_name' => $request->company_name,
            'product_message' => $request->product_message,
            
        ];
        Mail::send(new register($data_insert));
        RegisterModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'product_category' => $request->product_category,
            'company_name' => $request->company_name,
            'product_message' => $request->product_message,
            'save_date' => $newDate,
            'save_time' => $newTime,
            'amount' => 1,
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        
        if($request->product_category == 'Resistors(SMD)'){
            return redirect()->to('https://www.koaglobal.com/product/category/smd_resistor?sc_lang=en');
        }elseif($request->product_category == 'Low Resistance/Current Sense Shunt Resistors'){
            return redirect()->to('https://www.koaglobal.com/product/category/lowresistance_powershunt?sc_lang=en');
        }elseif($request->product_category == 'Resistors(Leaded)'){
            return redirect()->to('https://www.koaglobal.com/product/category/lead_resistor?sc_lang=en');
        }elseif($request->product_category == 'Thermistors Thermal Sensors'){
            return redirect()->to('https://www.koaglobal.com/product/category/th_sensor?sc_lang=en');
        }elseif($request->product_category == 'Inductors'){
            return redirect()->to('https://www.koaglobal.com/product/category/inductor?sc_lang=en');
        }elseif($request->product_category == 'Fuses'){
            return redirect()->to('https://www.koaglobal.com/product/category/fuse?sc_lang=en');
        }elseif($request->product_category == 'Varistors'){
            return redirect()->to('https://www.koaglobal.com/product/category/fuse?sc_lang=en');
        }elseif($request->product_category == 'LTCC Substrates'){
            return redirect()->to('https://www.koaglobal.com/product/category/ltcc?sc_lang=en');
        }elseif($request->product_category == 'Others'){
            return redirect()->to('https://www.koaglobal.com/product/category/others?sc_lang=en');
        }else{
            return redirect(Session::get('lang')."/register");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function fileExport(Request $request)
    {
        return Excel::download(new RegisterExport, 'Register-collection.xlsx');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
