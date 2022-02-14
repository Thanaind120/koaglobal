<?php

namespace App\Exports;

use App\Models\RegisterModel;
use Illuminate\contracts\support\Responsesable;
use Illuminate\contracts\view\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Jimmyjs\ReportGenerator;
use Illuminate\Support\Str;


class RegisterReportExport2 implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        
        
        return RegisterModel::select(DB::raw('SUM(amount) as register_one'))->where(DB::raw('product_category'), '=', 'Resistors(SMD)')->get();
        
        
    }

    public function map($register): array
    {   
        $register_two = RegisterModel::select(DB::raw('SUM(amount) as register_two'))->where(DB::raw('product_category'), '=', 'Low Resistance/Current Sense Shunt Resistors')->get(); 
        $explode_two = explode(":",$register_two);
        $replaced_two = str_replace('}]','', $explode_two);
        $register_three = RegisterModel::select(DB::raw('SUM(amount) as register_three'))->where(DB::raw('product_category'), '=', 'Resistors(Leaded)')->get();
        $explode_three = explode(":",$register_three);
        $replaced_three = str_replace('}]','', $explode_three);
        $register_four = RegisterModel::select(DB::raw('SUM(amount) as register_four'))->where(DB::raw('product_category'), '=', 'Thermistors Thermal Sensors')->get();
        $explode_four = explode(":",$register_four);
        $replaced_four = str_replace('}]','', $explode_four);
        $register_five = RegisterModel::select(DB::raw('SUM(amount) as register_five'))->where(DB::raw('product_category'), '=', 'Inductors')->get();
        $explode_five = explode(":",$register_five);
        $replaced_five = str_replace('}]','', $explode_five);
        $register_six = RegisterModel::select(DB::raw('SUM(amount) as register_six'))->where(DB::raw('product_category'), '=', 'Fuses')->get();
        $explode_six = explode(":",$register_six);
        $replaced_six = str_replace('}]','', $explode_six);
        $register_seven = RegisterModel::select(DB::raw('SUM(amount) as register_seven'))->where(DB::raw('product_category'), '=', 'Varistors')->get();
        $explode_seven = explode(":",$register_seven);
        $replaced_seven = str_replace('}]','', $explode_seven);
        $register_eight = RegisterModel::select(DB::raw('SUM(amount) as register_eight'))->where(DB::raw('product_category'), '=', 'LTCC Substrates')->get();
        $explode_eight = explode(":",$register_eight);
        $replaced_eight = str_replace('}]','', $explode_eight);
        $register_nine = RegisterModel::select(DB::raw('SUM(amount) as register_nine'))->where(DB::raw('product_category'), '=', 'Others')->get();
        $explode_nine = explode(":",$register_nine);
        $replaced_nine = str_replace('}]','', $explode_nine);

        return [
            [
            '1',
            'Resistors(SMD)',
            'Number of Visitors',
            '"'.$register->register_one.'"',
            'Times',
        ],
        [
            '2',
            'Low Resistance/Current Sense Shunt Resistors',
            'Number of Visitors',
            $replaced_two[1],
            'Times',
        ],
        [
            '3',
            'Resistors(Leaded)',
            'Number of Visitors',
            $replaced_three[1],
            'Times',
        ],
        [
            '4',
            'Thermistors Thermal Sensors',
            'Number of Visitors',
            $replaced_four[1],
            'Times',
        ],
        [
            '5',
            'Inductors',
            'Number of Visitors',
            $replaced_five[1],
            'Times',
        ],
        [
            '6',
            'Fuses',
            'Number of Visitors',
            $replaced_six[1],
            'Times',
        ],
        [
            '7',
            'Varistors',
            'Number of Visitors',
            $replaced_seven[1],
            'Times',
        ],
        [
            '8',
            'LTCC Substrates',
            'Number of Visitors',
            $replaced_eight[1],
            'Times',
        ],
        [
            '9',
            'Others',
            'Number of Visitors',
            $replaced_nine[1],
            'Times',
        ]
        ];
    }

    public function headings(): array
    {
        return [
           '#',
           'PRODUCT CATEGORY',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'B1:E1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
}
