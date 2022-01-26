<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\bannerModel;
use Carbon\Carbon;

class BannerController extends Controller
{
    public function __construct(){}
    
    public function banner(){
        $ban = bannerModel::get();
        return view('layouts/backend/banner')->with('ban',$ban);
    }

    public function create()
	{
		return view('layouts/backend/create_banner');
	}

    # insert
    public function store(Request $request)
	{
		$pic = new bannerModel();
		if($request->image_banner != ''){
            $image_banner = 'banner_'.date('YmdHis').'.'.$request->image_banner->getClientOriginalExtension();
            $request->image_banner->move(public_path() . '/backend/assets/images/banner', $image_banner);
            $pic->image_banner=$image_banner;   
        }
        if($request->image_banner2 != ''){
            $image_banner2 = 'banner2_'.date('YmdHis').'.'.$request->image_banner2->getClientOriginalExtension();
            $request->image_banner2->move(public_path() . '/backend/assets/images/banner', $image_banner2);
            $pic->image_banner2=$image_banner2;   
        }
        $pic->save();
		return redirect('backoffice/banner');
	}

    public function edit($id)
	{
        $ban = bannerModel::find($id);
		return view('layouts/backend/update_banner', compact('ban'));
	}

    # update
    public function update(Request $request,$id)
	{
        // dd('update');
           $image_banner = $request->file('image_banner');
           $image_banner2 = $request->file('image_banner2');
            if($image_banner != ''){
                $image_banner_gen = 'banner_'.date('YmdHis').'.'.$image_banner->getClientOriginalExtension();
                $image_banner->move(public_path() . '/backend/assets/images/banner', $image_banner_gen);
                $image1 = bannerModel::where('id_banner', $id)->first()->image_banner;
                $path_img = public_path('backend/assets/images/banner/'. $image1);
                if (file_exists($path_img) != '') {
                    unlink($path_img);
                }
            }
            if($image_banner2 != ''){
                $image_banner2_gen = 'banner2_'.date('YmdHis').'.'.$image_banner2->getClientOriginalExtension();
                $image_banner2->move(public_path() . '/backend/assets/images/banner', $image_banner2_gen);
                $image2 = bannerModel::where('id_banner', $id)->first()->image_banner2;
                $path_img2 = public_path('backend/assets/images/banner/'. $image2);
                if (file_exists($path_img2) != '') {
                    unlink($path_img2);
                }
            }
            bannerModel::find($id)->update([   // bannerModel::create([]);
                'image_banner' => $image_banner_gen,
                'image_banner2' => $image_banner2_gen,
                // 'topic' => $request->topic,
                'updated_at' => Carbon::now()
            ]);
            return redirect('backoffice/banner');
	}

    public function destroy($id){
        $image1 = bannerModel::where('id_banner', $id)->first()->image_banner;
        $image2 = bannerModel::where('id_banner', $id)->first()->image_banner2;
		$path_img = public_path('backend/assets/images/banner/'. $image1);
		if (file_exists($path_img) != '') {
			unlink($path_img);
		}
        $path_img2 = public_path('backend/assets/images/banner/'. $image2);
		if (file_exists($path_img2) != '') {
			unlink($path_img2);
		}
        bannerModel::find($id)->delete();
    }
}
