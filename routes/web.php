<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('layouts/frontend/index'); });

Auth::routes(); // Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product', function () { return view('layouts/frontend/product'); });

Route::get('/applications', function () { return view('layouts/frontend/app'); });

Route::get('/corporation', function () { return view('layouts/frontend/corporate'); });

Route::get('/salesnetwork', function () { return view('layouts/frontend/salesnetwork'); });

Route::get('/contactus', function () { return view('layouts/frontend/contact'); });

Route::get('/news', function () { return view('layouts/frontend/news'); });

Route::get('/news000', function () { return view('layouts/frontend/news000'); });

Route::get('/register', function () { return view('layouts/frontend/register'); });

//*-----------------------------------------------------------------------------------------------------------------------------------------*//

//*---------------------------------------------------------------- BACKEND ----------------------------------------------------------------*//

Route::get('/backoffice/login','AdminController@login'); // Route::get('/backoffice/login', function () { return view('layouts/backend/login'); });

Route::post('/backoffice/login','AdminController@loginf')->name('backoffice.login');

Route::get('/backoffice/logout','AdminController@logout')->name('backoffice.logout');

Route::group(['middleware' => ['auth']], function(){
    //** DASHBOARD **//
    Route::get('/backoffice/dashboard','DashboardController@home');    
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