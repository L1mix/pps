<?php

namespace App\Exports;

use App\Models\Blank;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TableExport implements FromView, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    private $data;
    public function __construct()
    {
       
        $this->data = Blank::all();
    }
    public function view(): View
    {
        return view('users', [
            
            'tables'=>$this->data
        ]);
    }
}
