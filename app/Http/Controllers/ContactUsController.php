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
