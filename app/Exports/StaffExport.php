<?php

namespace App\Exports;

use App\Models\Staff;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StaffExport implements FromView, ShouldAutoSize
{
    use Exportable;
    public function view() : View
    {
        return view('admin.staff.exportExcel', [
            'data' => Staff::all()
        ]);
    }
}
