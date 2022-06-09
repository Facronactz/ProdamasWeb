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

        $syarat = $request->file('foto_syarat');
        $alur = $request->file('foto_alur');
        $legalitas = $request->file('foto_legalitas');

        File::delete(public_path("../koperasiProd/" . $koperasis->foto_syarat));
        File::delete(public_path("../koperasiProd/" . $koperasis->foto_alur));
        File::delete(public_path("../koperasiProd/" . $koperasis->foto_legalitas));

        $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $syarat->getClientOriginalName());
        $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $alur->getClientOriginalName());
        $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $legalitas->getClientOriginalName());

        $syarat->move(public_path('../koperasiProd/'), $fotoPath);
        $alur->move(public_path('../koperasiProd/'), $fotoPath);
        $legalitas->move(public_path('../koperasiProd/'), $fotoPath);

        $koperasis->update([
            'informasi' => $request->informasi,
            'foto_syarat' => $fotoPath,
            'foto_alur' => $fotoPath,
            'foto_legalitas' => $fotoPath
        ]);

        return redirect('/admin/list-koperasirw')->with('success', 'Informasi Koperasi Berhasil Diedit!');
    }
}
