<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Session;
use  App\LanguageModel;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//*---------------------------------------------------------------- FRONTEND ---------------------------------------------------------------*//
$lang_db = LanguageModel::find(4);
Route::get('/set/lang/{lang}', 'HomeController@setLang');
// clear cache
Route::get('/clc', function() {
	Artisan::call('cache:clear');
	Artisan::call('config:clear');
	Artisan::call('config:cache');
    Artisan::call('view:clear');
    
    // Artisan::call('optimize');
    // Artisan::call('clear-compiled');
        // Artisan::call('view:clear');
        // session()->forget('key');
	return "Cleared!";
});
Route::get('/', function () use ($lang_db) {
 $default = $lang_db->set;  // -----th

 $lang = Session('lang'); // -----en



 if ($lang) {
  $check = \App\LanguageModel::where('set', $lang)->first();
  if ($check->status == "on") {
   $default = $check->set;
  } else {
   $data = \App\LanguageModel::where(['status' => "on", 'default' => "on"])->first();
   $default = $data->set;
  }
  Session::put('lang', $default);
  return redirect("/$default");
 } else {
  Session::put('lang', $default);
  return redirect("/$default");
 }
});

Auth::routes();
Route::group(['middleware' => 'Language'], function () {
    $lang_db = \App\LanguageModel::where('status', "on")->get();
    foreach ($lang_db as $lang) {
        Route::prefix($lang->set)->group(function () {
            Route::get('/','HomeController@index');
            Route::post('/','HomeController@store_cookie')->name('cookie.cookie');
            Route::get('/news','HomeController@news');
            Route::get('/register','HomeController@register');
            Route::post('/register','HomeController@store_register')->name('register.insert');
            Route::get('/contactus','HomeController@contact_us');
            Route::post('/contactus','HomeController@store_contact')->name('contactus.insert');
            Route::get('/news000/{id}','HomeController@news000');
            Route::get('/products','HomeController@products');
            Route::get('/events','HomeController@events');
            Route::get('/awards','HomeController@awards');
        });
    }
});
Route::get('/product','HomeController@product');
Route::get('/applications','HomeController@applications');
Route::get('/corporation','HomeController@corporation');
Route::get('/salesnetwork','HomeController@salesnetwork');
            
            

//*-----------------------------------------------------------------------------------------------------------------------------------------*//

//*---------------------------------------------------------------- BACKEND ----------------------------------------------------------------*//

Route::get('/backoffice/login','AdminController@login'); // Route::get('/backoffice/login', function () { return view('layouts/backend/login'); });

Route::post('/backoffice/login','AdminController@loginf')->name('backoffice.login');

Route::get('/backoffice/logout','AdminController@logout')->name('backoffice.logout');

Route::group(['middleware' => ['auth']], function(){
    //** DASHBOARD **//
    Route::get('/backoffice/dashboard','DashboardController@home');    
    Route::get('/backoffice/dashboard/search','DashboardController@search')->name('search.report');    
    Route::get('/backoffice/dashboard/file-export', [DashboardController::class, 'fileExport'])->name('dashboard.file-export');
    Route::get('/backoffice/dashboard/file-export2', [DashboardController::class, 'fileExport2'])->name('dashboard.file-export2');
    //** BANNER **//
    Route::get('/backoffice/banner','BannerController@banner'); // get all Banner data  
    Route::get('/backoffice/banner/create','BannerController@create');  // create Banner view 
    Route::post('/backoffice/banner/create','BannerController@store')->name('banner.insert'); // store Banner data
    Route::get('/backoffice/banner/edit/{id}','BannerController@edit');   // edit Banner view
    Route::put('/backoffice/banner/update/{id}','BannerController@update'); //update Banner data
    Route::delete('/backoffice/banner/delete/{id}','BannerController@destroy'); //delete Banner data
    //** News **//
    Route::get('/backoffice/news','NewsController@news'); // get all News data  
    Route::get('/backoffice/news/create','NewsController@create');  // create News view 
    Route::post('/backoffice/news/create','NewsController@store')->name('news.insert'); // store News data
    Route::get('/backoffice/news/edit/{id}','NewsController@edit');   // edit News view
    Route::put('/backoffice/news/update/{id}','NewsController@update'); //update News data
    Route::delete('/backoffice/news/delete/{id}','NewsController@destroy'); //delete News data
    //** Register **//
    Route::get('/backoffice/register','RegisterController@register'); // get all News data  
    Route::get('/backoffice/register/file-export', [RegisterController::class, 'fileExport'])->name('register.file-export'); // export Register data
    //** Contact Us **//
    Route::get('/backoffice/contact_us','ContactUsController@contact_us'); // get all Contact data  
    Route::get('/backoffice/contact_us/file-export', [ContactUsController::class, 'fileExport'])->name('contact.file-export'); // export Contact data
    //** News Release **//
    Route::get('/backoffice/news_release','MasterSetupController@news_release'); // get all News Release data  
    Route::get('/backoffice/news_release/create','MasterSetupController@create');  // create News Release view 
    Route::post('/backoffice/news_release/create','MasterSetupController@store')->name('news_release.insert'); // store News Release data
    Route::get('/backoffice/news_release/edit/{id}','MasterSetupController@edit');   // edit News Release view
    Route::put('/backoffice/news_release/update/{id}','MasterSetupController@update'); //update News Release data
    Route::delete('/backoffice/news_release/delete/{id}','MasterSetupController@destroy'); //delete News Release data
    //** Archive **//
    Route::get('/backoffice/archive','MasterSetupController@archive'); // get all Archive data  
    Route::get('/backoffice/archive/create','MasterSetupController@createtwo');  // create Archive view 
    Route::post('/backoffice/archive/create','MasterSetupController@storetwo')->name('archive.insert'); // store Archive data
    Route::get('/backoffice/archive/edit/{id}','MasterSetupController@edittwo');   // edit Archive view
    Route::put('/backoffice/archive/update/{id}','MasterSetupController@updatetwo'); //update Archive data
    Route::delete('/backoffice/archive/delete/{id}','MasterSetupController@destroytwo'); //delete Archive data
});

//*-----------------------------------------------------------------------------------------------------------------------------------------*//

// Route::resource('demos', DemoController::class);
//     Route::get('demos', 'DemoController@index');
//     Route::get('demos/{{id}/edit', 'DemoController@edit');
//     Route::put('demos/update/{id}', 'DemoController@update');
//     Route::get('demos/create', 'DemoController@create');
//     Route::post('demos/store', 'DemoController@store');
//     Route::get('demos/show/{id}', 'DemoController@show');
//     Route::delete('demos/{id}/destroy', 'DemoController@destroy');