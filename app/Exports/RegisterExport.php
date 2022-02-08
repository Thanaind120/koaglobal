<?php

namespace App\Exports;

use App\Models\RegisterModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegisterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return RegisterModel::all('name','email','tel','product_category','company_name','product_message');
    }
}
