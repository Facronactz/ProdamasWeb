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
            'foto_syarat'=> 'required',
            'foto_alur'=> 'required',
            'foto_legalitas'=> 'required',
        ]);

        $koperasis = Koperasirw::findorfail($id);

        $syarat = $request->file('foto_syarat');
        $alur = $request->file('foto_alur');
        $legalitas = $request->file('foto_legalitas');

        File::delete(public_path("../koperasiProd/" . $koperasis->foto_syarat));
        File::delete(public_path("../koperasiProd/" . $koperasis->foto_alur));
        File::delete(public_path("../koperasiProd/" . $koperasis->foto_legalitas));

        $syaratPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $syarat->getClientOriginalName());
        $alurPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $alur->getClientOriginalName());
        $legalitasPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $legalitas->getClientOriginalName());

        $syarat->move(public_path('../koperasiProd/'), $syaratPath);
        $alur->move(public_path('../koperasiProd/'), $alurPath);
        $legalitas->move(public_path('../koperasiProd/'), $legalitasPath);

        $koperasis->update([
            'informasi' => $request->informasi,
            'foto_syarat' => $syaratPath,
            'foto_alur' => $alurPath,
            'foto_legalitas' => $legalitasPath
        ]);

        return redirect('/admin/list-koperasirw')->with('success', 'Informasi Koperasi Berhasil Diedit!');
    }
}
