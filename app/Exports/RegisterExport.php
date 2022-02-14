<?php

namespace App\Exports;

use App\Models\RegisterModel;
use Illuminate\contracts\support\Responsesable;
use Illuminate\contracts\view\View;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class RegisterExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return RegisterModel::all('save_date','name','email','tel','product_category','company_name','product_message');
        return RegisterModel::orderBy('id', 'DESC')->get();
    }

    public function map($register): array
    {
        return [
            $register->save_date,
            $register->name,
            $register->email,
            $register->tel,
            $register->company_name,
            $register->product_category,
            $register->product_message,
        ];
    }

    public function headings(): array
    {
        return [
           'Save Date',
           'NAME',
           'E-MAIL',
           'CONTACT NUMBER',
           'COMPANY NAME',
           'PRODUCT CATEGORY',
           'MESSAGE',
        ];
    }
}
