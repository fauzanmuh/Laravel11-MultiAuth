<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function pdf()
    {
        $staff = Staff::all();
        $pdf = Pdf::loadView('admin/staff/pdf',['staff' => $staff])->setPaper('a4', 'landscape');;
        return $pdf->download('staff.pdf');
    }
}
