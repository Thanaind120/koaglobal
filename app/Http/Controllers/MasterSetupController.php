<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSetupModel;
use App\Models\MasterSetuptwoModel;
use Carbon\Carbon;

class MasterSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news_release()
    {
        $news_release = MasterSetupModel::orderBy('id_news_release', 'ASC')->get();
        return view('layouts/backend/news_release')->with('news_release',$news_release);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/backend/create_news_release');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MasterSetupModel::create([
            'news_release_topics_th' => $request->news_release_topics_th,
            'news_release_topics_en' => $request->news_release_topics_en,
            'news_release_name_th' => $request->news_release_name_th,
            'news_release_name_en' => $request->news_release_name_en,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/news_release');
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
        $news_release = MasterSetupModel::find($id);
		return view('layouts/backend/update_news_release', compact('news_release'));
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
        MasterSetupModel::find($id)->update([
            'news_release_topics_th' => $request->news_release_topics_th,
            'news_release_topics_en' => $request->news_release_topics_en,
            'news_release_name_th' => $request->news_release_name_th,
            'news_release_name_en' => $request->news_release_name_en,
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/news_release');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterSetupModel::find($id)->delete();
    }

    public function archive()
    {
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        return view('layouts/backend/archive')->with('archive',$archive);
    }

    public function createtwo()
    {
        return view('layouts/backend/create_archive');
    }

    public function storetwo(Request $request)
    {
        MasterSetuptwoModel::create([
            'year' => $request->year,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/archive');
    }

    public function edittwo($id)
    {
        $archive = MasterSetuptwoModel::find($id);
		return view('layouts/backend/update_archive', compact('archive'));
    }

    public function updatetwo(Request $request, $id)
    {
        MasterSetuptwoModel::find($id)->update([
            'year' => $request->year,
            'updated_at' => Carbon::now()
        ]);
        return redirect('backoffice/archive');
    }

    public function destroytwo($id)
    {
        MasterSetuptwoModel::find($id)->delete();
    }
}
