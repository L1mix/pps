<?php

namespace App\Exports;

use App\Models\Department;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DepartmentExport implements FromView, ShouldAutoSize
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    private $faculty;
    public function __construct()
    {
       
        $this->faculty = Department::join('users', 'users.department_id', '=', 'departments.id')
            ->join('blanks', 'blanks.user_id', '=', 'users.id')
            ->selectRaw('departments.faculty, sum(blanks.punkt1) as punkt1, sum(blanks.punkt2) as punkt2, sum(blanks.punkt3) as punkt3, sum(blanks.punkt4) as punkt4')
            ->groupBy('departments.faculty')
            ->get();
    }
    public function view(): View
    {
        return view('department', [
            
            'departments'=>$this->faculty
        ]);
    }
}
