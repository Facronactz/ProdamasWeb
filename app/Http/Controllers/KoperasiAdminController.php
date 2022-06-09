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
            'foto_syarat' => 'required',
            'foto_alur' => 'required',
            'foto_legalitas' => 'required',
        ]);

        $koperasi = Koperasirw::findOrFail($id);
        $foto_syarat = $request->file('foto_syarat');
        $foto_alur = $request->file('foto_alur');
        $foto_legalitas = $request->file('foto_legalitas');

        File::delete(public_path("../koperasiProd/" . $koperasi->foto_syarat));
        File::delete(public_path("../koperasiProd/" . $koperasi->foto_alur));
        File::delete(public_path("../koperasiProd/" . $koperasi->foto_legalitas));
        $foto_syaratPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto_syarat->getClientOriginalName());
        $foto_alurPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto_alur->getClientOriginalName());
        $foto_legalitasPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto_legalitas->getClientOriginalName());
        $foto_syarat->move(public_path('../koperasiProd/'), $foto_syaratPath);
        $foto_alur->move(public_path('../koperasiProd/'), $foto_alurPath);
        $foto_legalitas->move(public_path('../koperasiProd/'), $foto_legalitasPath);

        $koperasi->update([
            'informasi' => $request->informasi,
            'foto_syarat' => $foto_syaratPath,
            'foto_alur' => $foto_alurPath,
            'foto_legalitas' => $foto_legalitasPath
        ]);

        return redirect('/admin/list-koperasirw')->with('success', 'Informasi Koperasi Berhasil Diedit!');
    }
}
