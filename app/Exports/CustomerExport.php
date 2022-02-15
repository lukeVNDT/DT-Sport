<?php

namespace App\Exports;

use App\customerorder;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return customerorder::all();
    }
}
