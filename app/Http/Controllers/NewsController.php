<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\NewsModel;
use App\Models\MasterSetupModel;
use App\Models\MasterSetuptwoModel;
use Carbon\Carbon;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $news = DB::table('news')
        ->leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->orderBy('id_news', 'DESC')->get();
        return view('layouts/backend/news')->with('news',$news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive','DESC')->get();
        return view('layouts/backend/create_news', compact('news_release'), compact('archive'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
         if($image != ''){
             $image_gen = 'news_'.date('YmdHis').'.'.$image->getClientOriginalExtension();
             $image->move(public_path() . '/backend/assets/images/image_news', $image_gen);
         }

         NewsModel::create([
            'id_news_releases' => $request->id_news_releases,
            'id_archives' => $request->id_archives,
            'save_date' => $request->save_date,
            'news_name_en' => $request->news_name_en,
            'news_name_th' => $request->news_name_th,
            'image' => $image_gen,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/news');
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
        $news = NewsModel::find($id);
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive','DESC')->get();
		return view('layouts/backend/update_news', compact('news_release'), compact('archive'))->with('news',$news);
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
        $image = $request->file('image');
        if($image != ''){
            $image_gen = 'news_'.date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move(public_path() . '/backend/assets/images/image_news', $image_gen);
            $image1 = NewsModel::where('id_news', $id)->first()->image;
            $path_img = public_path('backend/assets/images/image_news/'. $image1);
            if (file_exists($path_img) != '') {
                unlink($path_img);
            }
         }
         NewsModel::find($id)->update([
            'id_news_releases' => $request->id_news_releases,
            'id_archives' => $request->id_archives,
            'save_date' => $request->save_date,
            'news_name_en' => $request->news_name_en,
            'news_name_th' => $request->news_name_th,
            'image' => $image_gen,
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = NewsModel::where('id_news', $id)->first()->image;
		$path_img = public_path('backend/assets/images/image_news/'. $image);
		if (file_exists($path_img) != '') {
			unlink($path_img);
		}
        
        NewsModel::find($id)->delete();
    }
}
