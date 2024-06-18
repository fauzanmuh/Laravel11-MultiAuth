<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StaffExport;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Staff::orderBy('nama', 'asc')->paginate(5);
        return view('admin.staff.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ], [
            'nik.required' => 'NIK harus diisi',
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_hp.required' => 'No. Telepon harus diisi',
            'no_hp.numeric' => 'No. Telepon harus berupa angka',
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
        ];
        Staff::create($data);
        return redirect('admin/staff')->with('success', 'Staff Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Staff::where('nik', $id)->first();
        return view('admin.staff.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Staff::where('nik', $id)->first();
        return view('admin.staff.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ], [
            'nik.required' => 'NIK harus diisi',
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'no_hp.required' => 'No. Telepon harus diisi',
            'no_hp.numeric' => 'No. Telepon harus berupa angka',
        ]);

        $data = [
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
        ];

        Staff::where('nik', $id)->update($data);
        return redirect('admin/staff')->with('success', 'Staff Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Staff::where('nik', $id)->delete();
        return redirect('admin/staff')->with('success', 'Staff Berhasil Dihapus');
    }

    public function cari(Request $request)
    {
        $cari = $request->input('cari');
        $data = Staff::where('nama', 'like', "%" . $cari . "%")
        ->orWhere('email', 'like', "%" . $cari . "%")
        ->orWhere('nik', 'like', "%" . $cari . "%")
        ->paginate(5);
        return view('admin.staff.index', compact('data'));
    }

    public function pdf()
    {
        $staff = Staff::all();
        $pdf = Pdf::loadView('admin/staff/pdf',['staff' => $staff])->setPaper('a4', 'landscape');;
        return $pdf->download('Daftar-Staff.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new StaffExport, 'Daftar-Staff.xlsx');
    }
}
