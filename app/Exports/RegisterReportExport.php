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


class RegisterReportExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{

    protected $d_from;
    protected $d_to;
    protected $date_from;
    protected $date_to;

    function __construct($d_from,$d_to,$date_from,$date_to) {
        $this->d_from = $d_from;
        $this->d_to = $d_to;
        $this->date_from = $date_from;
        $this->date_to = $date_to;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    { 
        return RegisterModel::select(DB::raw('SUM(amount) as register_one'))->where(DB::raw('product_category'), '=', 'Resistors(SMD)')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        
        
    }

    public function map($register): array
    {   
        $register_two = RegisterModel::select(DB::raw('SUM(amount) as register_two'))->where(DB::raw('product_category'), '=', 'Low Resistance/Current Sense Shunt Resistors')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get(); 
        $explode_two = explode(":",$register_two);
        $replaced_two = str_replace('}]','', $explode_two);
        $register_three = RegisterModel::select(DB::raw('SUM(amount) as register_three'))->where(DB::raw('product_category'), '=', 'Resistors(Leaded)')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_three = explode(":",$register_three);
        $replaced_three = str_replace('}]','', $explode_three);
        $register_four = RegisterModel::select(DB::raw('SUM(amount) as register_four'))->where(DB::raw('product_category'), '=', 'Thermistors Thermal Sensors')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_four = explode(":",$register_four);
        $replaced_four = str_replace('}]','', $explode_four);
        $register_five = RegisterModel::select(DB::raw('SUM(amount) as register_five'))->where(DB::raw('product_category'), '=', 'Inductors')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_five = explode(":",$register_five);
        $replaced_five = str_replace('}]','', $explode_five);
        $register_six = RegisterModel::select(DB::raw('SUM(amount) as register_six'))->where(DB::raw('product_category'), '=', 'Fuses')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_six = explode(":",$register_six);
        $replaced_six = str_replace('}]','', $explode_six);
        $register_seven = RegisterModel::select(DB::raw('SUM(amount) as register_seven'))->where(DB::raw('product_category'), '=', 'Varistors')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_seven = explode(":",$register_seven);
        $replaced_seven = str_replace('}]','', $explode_seven);
        $register_eight = RegisterModel::select(DB::raw('SUM(amount) as register_eight'))->where(DB::raw('product_category'), '=', 'LTCC Substrates')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
        $explode_eight = explode(":",$register_eight);
        $replaced_eight = str_replace('}]','', $explode_eight);
        $register_nine = RegisterModel::select(DB::raw('SUM(amount) as register_nine'))->where(DB::raw('product_category'), '=', 'Others')->where(DB::raw('save_date'), '>=', $this->date_from)->where(DB::raw('save_date'), '<=', $this->date_to)->get();
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
        [
            'Result filter : Date From',
            $this->d_from,
            'Date To',
            $this->d_to,
        ],
        [
            '#',
            'PRODUCT CATEGORY',
        ]
        
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'B2:E2'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
}
