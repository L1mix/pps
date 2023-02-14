<?php

namespace App\Http\Controllers;

use App\Exports\DepartmentExport;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DepartmentController extends Controller
{
    public function index()
    {
        $faculty = Department::join('users', 'users.department_id', '=', 'departments.id')
            ->join('blanks', 'blanks.user_id', '=', 'users.id')
            ->selectRaw('departments.faculty, sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
            ->groupBy('departments.faculty')
            ->get();
        return view('department', [
            'departments'=>$faculty
        ]);
        
    }
    public function exportDepartment(){
        return Excel::download(new DepartmentExport, 'department.xlsx');
    }
}

