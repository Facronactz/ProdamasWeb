<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasirw;
use Illuminate\Support\Facades\File;

class KoperasiAdminController extends Controller
{
    public function index()
    {
        $koperasi = Koperasirw::first()->get();
        return view('admin.koperasirw.list', compact('koperasi'));
    }

    public function edit($id)
    {
        $koperasi = Koperasirw::findOrFail($id);
        return view('admin.koperasirw.edit', compact('koperasi'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'informasi' => 'required',
        ]);

        $koperasis = Koperasirw::findorfail($id);

        $foto = $request->file('foto_syarat');
        File::delete(public_path("../koperasiProd/" . $koperasis->foto_syarat));
        $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto->getClientOriginalName());
        $foto->move(public_path('../koperasiProd/'), $fotoPath);

        $koperasis->update([
            'informasi' => $request->informasi,
            'foto_syarat' => $fotoPath
        ]);

        return redirect('/admin/list-koperasirw')->with('success', 'Informasi Koperasi Berhasil Diedit!');
    }
}
