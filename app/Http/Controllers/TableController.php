<?php

namespace App\Http\Controllers;

use App\Exports\TableExport;
use App\Http\Controllers\Controller;
use App\Models\Blank;
use App\Models\Cathedra;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class TableController extends Controller
{
    public function index()
    {
        // Gate::authorize('view_table');
        $data = Blank::all();
        $test = Cathedra::join('users', 'users.сathedra_id', '=', 'сathedras.id')
            ->join('blanks', 'blanks.user_id', '=', 'users.id')
            ->selectRaw('сathedras.name,sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
            ->groupBy('сathedras.name')
            ->get();
        $faculty = Department::join('users', 'users.department_id', '=', 'departments.id')
            ->join('blanks', 'blanks.user_id', '=', 'users.id')
            ->selectRaw('departments.faculty, sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
            ->groupBy('departments.faculty')
            ->get();
        return view('table', [
            'tables' => $data,
            'join' => $test,
            'departments'=>$faculty
        ]);
    }
    public function export(){
        return Excel::download(new TableExport, 'teachers.xlsx');
    }
}
