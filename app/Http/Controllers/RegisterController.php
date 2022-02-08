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
        $date = date('Y-m-d');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        $time = date('H:i:s');
        $newTime = \Carbon\Carbon::createFromFormat('H:i:s', $time)->format('H:i:s');
        $data_insert = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'tel' => $request->tel,
            'title_name' => $request->title_name,
            'department_name' => $request->department_name,
            'organization_name' => $request->organization_name,
            'location_name' => $request->location_name,
            'product_message' => $request->product_message,
            
        ];
        Mail::send(new register($data_insert));
        RegisterModel::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'tel' => $request->tel,
            'title_name' => $request->title_name,
            'department_name' => $request->department_name,
            'organization_name' => $request->organization_name,
            'location_name' => $request->location_name,
            'product_message' => $request->product_message,
            'save_date' => $newDate,
            'save_time' => $newTime,
            'amount' => 1,
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        return redirect(Session::get('lang')."/register");
        // return redirect('register');
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
