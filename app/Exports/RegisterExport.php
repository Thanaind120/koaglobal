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
        return RegisterModel::all('firstname','lastname','email','tel','title_name','department_name','organization_name','location_name','product_message');
    }
}
