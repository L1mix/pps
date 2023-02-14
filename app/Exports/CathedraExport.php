<?php

namespace App\Exports;

use App\Models\Cathedra;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CathedraExport implements FromView, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    private $test;
    public function __construct()
    {
       
        $this->test = Cathedra::join('users', 'users.сathedra_id', '=', 'сathedras.id')
        ->join('blanks', 'blanks.user_id', '=', 'users.id')
        ->selectRaw('сathedras.name,sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
        ->groupBy('сathedras.name')
        ->get();
    }
    public function view(): View
    {
        return view('cathedra', [
            
            'join'=>$this->test
        ]);
    }
}
