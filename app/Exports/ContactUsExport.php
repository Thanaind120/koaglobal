<?php

namespace App\Exports;

use App\Models\ContactUsModel;
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

class ContactUsExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return ContactUsModel::all('save_date','type_inquiry','application','product_category','product_message','firstname','lastname','email','company_name','area','zip_code');
        return ContactUsModel::orderBy('id', 'DESC')->get();
    }

    public function map($contact_us): array
    {
        return [
            $contact_us->save_date,
            $contact_us->type_inquiry,
            $contact_us->application,
            $contact_us->product_category,
            $contact_us->product_message,
            $contact_us->firstname,
            $contact_us->lastname,
            $contact_us->email,
            $contact_us->company_name,
            $contact_us->area,
            $contact_us->zip_code,
        ];
    }

    public function headings(): array
    {
        return [
           'Save Date',
           'TYPE OF INQUIRY',
           'PRIMARY APPLICATION',
           'PRIMARY PRODUCT CATEGORY',
           'MESSAGE',
           'FIRST NAME',
           'LAST NAME',
           '(COMPANY) EMAIL ADDRESS',
           'COMPANY NAME',
           'COUNTRY / AREA',
           'POSTAL / ZIP CODE',
        ];
    }
}
