<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasirw;

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
            'deskripsi' => 'required',
        ]);

        $koperasi = Koperasirw::findOrFail($id);
        $koperasi_data = ["deskripsi" => $request["deskripsi"]];
        $koperasi->update($koperasi_data);

        return redirect('/admin/list-koperasirw')->with('success', 'Deskripsi Koperasi Berhasil Diedit!');
    }
}
