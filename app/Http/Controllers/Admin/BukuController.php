<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::orderBy('kode_buku', 'asc')->paginate(5);
        return view('admin.buku.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
        ], [
            'kode_buku.required' => 'Kode Buku harus diisi',
            'judul.required' => 'Judul Buku harus diisi',
            'penulis.required' => 'Penulis harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'foto.required' => 'File Gambar harus diisi',
            'foto.image' => 'File Gambar harus berupa gambar',
            'foto.mimes' => 'File Gambar harus berupa jpeg,png,jpg,gif,svg',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_baru = date('YmdHis') . '.' . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_baru);

        $data = [
            'kode_buku' => $request->input('kode_buku'),
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'foto' => $foto_baru,
            'deskripsi' => $request->input('deskripsi'),
        ];
        Buku::create($data);
        return redirect('admin/buku')->with('success', 'Buku Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Buku::where('kode_buku', $id)->first();
        return view('admin.buku.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Buku::where('kode_buku', $id)->first();
        return view('admin.buku.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required' => 'Judul Buku harus diisi',
            'penulis.required' => 'Penulis harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
            ], [
                'foto.mimes' => 'Foto harus berupa jpeg,png,jpg'
            ]);

            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('YmdHis') . '.' . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_baru);

            $data_foto = Buku::where('kode_buku', $id)->first();
            File::delete('foto/' . $data_foto->foto);
            $data['foto'] = $foto_baru;
        }
        Buku::where('kode_buku', $id)->update($data);
        return redirect('admin/buku')->with('success', 'Buku Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Buku::where('kode_buku', $id)->first();
        File::delete('foto/' . $data->foto);
        Buku::where('kode_buku', $id)->delete();
        return redirect('admin/buku')->with('success', 'Buku Berhasil Dihapus');
    }
}
