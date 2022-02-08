<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Imports\ContactUsImport;
use App\Mail\contactus;
use App\Exports\ContactUsExport;
use App\Models\ContactUsModel;
use App\Models\ApplicationModel;
use App\Models\PostalModel;
use App\Models\ProductCategoryModel;
use App\Models\TypeOfInquiryModel;
use Carbon\Carbon;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $application = ApplicationModel::get();
        // $zip_code = PostalModel::get();
        // $product_category = ProductCategoryModel::get();
        // $type_of_iunqiry = TypeOfInquiryModel::get();
        // return view('layouts/frontend/contact', compact('application'), compact('zip_code'))->with('product_category',$product_category)->with('type_of_iunqiry',$type_of_iunqiry);
        return view('layouts/frontend/contact');
    }

    public function contact_us()
    {
        // $contact = DB::table('contact_us')
        // ->leftJoin('application', 'contact_us.application', '=', 'application.id_application')
        // ->leftJoin('type_of_iunqiry', 'contact_us.type_inquiry', '=', 'type_of_iunqiry.id_iunqiry')
        // ->leftJoin('zip_code', 'contact_us.zip_code', '=', 'zip_code.id_zip_code')
        // ->leftJoin('product_category', 'contact_us.product_category', '=', 'product_category.id_product_category')->get();
        $contact = ContactUsModel::get();
        return view('layouts/backend/contact')->with('contact',$contact);
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
       
        return Excel::download(new ContactUsExport, 'Contact-collection.xlsx');
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
