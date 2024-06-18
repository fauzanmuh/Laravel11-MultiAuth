<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Staff;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $s = Staff::all();
        $b = Buku::all();
        $staff = count($s);
        $buku = count($b);
        return view('admin.dashboard', compact('staff', 'buku'));
    }
}
