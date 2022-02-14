<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\RegisterModel;
use App\Models\bannerModel;
use App\Models\MasterSetupModel;
use App\Models\ProductCategoryModel;
use App\Models\NewsModel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Imports\ContactUsImport;
use App\Mail\contactus;
use App\Exports\ContactUsExport;
use App\Models\ContactUsModel;
use App\Models\ApplicationModel;
use App\Models\PostalModel;
use App\Models\TypeOfInquiryModel;
use App\Models\MasterSetuptwoModel;
use App\Mail\register;
use App\Imports\RegisterImport;
use App\Exports\RegisterExport;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function store_cookie()
    {
        $hh = Session::put('cookie','1');
        return redirect()->back();
        // return redirect(Session::put('cookie',1)."/");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $cookie = Session::get('cookie'); 
            $banner = bannerModel::get();
            $product_category = ProductCategoryModel::get();
            $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
            ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->orderBy('save_date', 'DESC')->get();
            return view('layouts/frontend/index')->with('cookie', $cookie)->with('banner', $banner)->with('news', $news)->with('product_category', $product_category);
    }

    public function product()
    {
        return view('layouts/frontend/product');
    }

    public function applications()
    {
        return view('layouts/frontend/app');
    }

    public function corporation()
    {
        return view('layouts/frontend/corporate');
    }

    public function salesnetwork()
    {
        return view('layouts/frontend/salesnetwork');
    }

    public function contact_us()
    {
        // $application = ApplicationModel::get();
        // $zip_code = PostalModel::get();
        // $product_category = ProductCategoryModel::get();
        // $type_of_iunqiry = TypeOfInquiryModel::get();
        // return view('layouts/frontend/contact', compact('application'), compact('zip_code'))->with('product_category',$product_category)->with('type_of_iunqiry',$type_of_iunqiry);
        $cookie = Session::get('cookie'); 
        return view('layouts/frontend/contact')->with('cookie', $cookie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_contact(Request $request)
    {
        $date = date('Y-m-d');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        $time = date('H:i:s');
        $newTime = \Carbon\Carbon::createFromFormat('H:i:s', $time)->format('H:i:s');
        $data_insert = [
            'type_inquiry' => $request->type_inquiry,
            'application' => $request->application,
            'product_category' => $request->product_category,
            'product_message' => $request->product_message,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'area' => $request->area,
            'zip_code' => $request->zip_code,
            
        ];
        Mail::send(new contactus($data_insert));
        ContactUsModel::create([
            'type_inquiry' => $request->type_inquiry,
            'application' => $request->application,
            'product_category' => $request->product_category,
            'product_message' => $request->product_message,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'area' => $request->area,
            'zip_code' => $request->zip_code,
            'save_date' => $newDate,
            'save_time' => $newTime,
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        return redirect(Session::get('lang')."/contactus");
        // return redirect('/contactus');
    }

    public function news(){
        $cookie = Session::get('cookie'); 
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        $dateY = date('Y');
        $dateM = date('m');
        $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->where(DB::raw('YEAR(save_date)'), '=', $dateY)->where(DB::raw('MONTH(save_date)'), '=', $dateM)->get();
        return view('layouts/frontend/news')->with('cookie', $cookie)->with('news_release', $news_release)->with('archive', $archive)->with('news', $news);
    }

    public function news000($id){
        $cookie = Session::get('cookie'); 
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->find($id);
        return view('layouts/frontend/news000')->with('cookie', $cookie)->with('news_release', $news_release)->with('archive', $archive)->with('news', $news);
    }

    public function products()
    {
        $cookie = Session::get('cookie'); 
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->get();
        return view('layouts/frontend/products')->with('cookie', $cookie)->with('news_release', $news_release)->with('archive', $archive)->with('news', $news);
    }

    public function events()
    {
        $cookie = Session::get('cookie'); 
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->get();
        return view('layouts/frontend/events')->with('cookie', $cookie)->with('news_release', $news_release)->with('archive', $archive)->with('news', $news);
    }

    public function awards()
    {
        $cookie = Session::get('cookie'); 
        $news_release = MasterSetupModel::get();
        $archive = MasterSetuptwoModel::orderBy('id_archive', 'DESC')->get();
        $news = NewsModel::leftJoin('news_release', 'news.id_news_releases', '=', 'news_release.id_news_release')
        ->leftJoin('archive', 'news.id_archives', '=', 'archive.id_archive')->get();
        return view('layouts/frontend/awards')->with('cookie', $cookie)->with('news_release', $news_release)->with('archive', $archive)->with('news', $news);
    }

    public function register()
    {
        $cookie = Session::get('cookie'); 
        return view('layouts/frontend/register')->with('cookie', $cookie);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_register(Request $request)
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
}
