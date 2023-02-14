<?php

namespace App\Http\Controllers;

use App\Exports\CathedraExport;
use App\Http\Controllers\Controller;
use App\Models\Cathedra;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CathedraController extends Controller
{
    public function index()
    {
        $test = Cathedra::join('users', 'users.сathedra_id', '=', 'сathedras.id')
            ->join('blanks', 'blanks.user_id', '=', 'users.id')
            ->selectRaw('сathedras.name,sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
            ->groupBy('сathedras.name')
            ->get();
        return view('cathedra', [
            'join' => $test,
        ]);
        
    }
    public function exportCathedra(){
        return Excel::download(new CathedraExport, 'cathedra.xlsx');
    }
}
