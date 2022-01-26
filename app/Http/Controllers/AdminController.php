<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Login;
// use App\Models\loginModel;
class AdminController extends Controller
{
    public function login(){
        // return view('backend.login',[]);
        return view('layouts/backend/login');
    }
    public function loginf(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            // dd('success');
            return redirect("backoffice/dashboard");
        }else{
            // dd('error');
            return redirect("backoffice/login");
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();$request->session()->invalidate();
        return redirect("backoffice/login");
    }
}
