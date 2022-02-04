<?php

namespace App\Exports;

use App\Models\ContactUsModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContactUsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ContactUsModel::all('type_inquiry','application','product_category','product_message','firstname','lastname','email','company_name','area','zip_code');
    }
}
