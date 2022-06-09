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
        $koperasi = Koperasirw::findOrFail($id);
        $syarat = $request->file('foto_syarat');
        $alur = $request->file('foto_alur');
        $legalitas = $request->file('foto_legalitas');

        if ($syarat != null) {
            File::delete(public_path("../koperasiProd/" . $koperasi->foto_syarat));
            $syaratPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $syarat->getClientOriginalName());
            $syarat->move(public_path('../koperasiProd/'), $syaratPath);
            $koperasi->update([
                'foto_syarat' => $syaratPath,
            ]);
        }

        if ($alur != null) {
            File::delete(public_path("../koperasiProd/" . $koperasi->foto_alur));
            $alurPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $alur->getClientOriginalName());
            $alur->move(public_path('../koperasiProd/'), $alurPath);
            $koperasi->update([
                'foto_alur' => $alurPath,
            ]);
        }

        if ($legalitas != null) {
            File::delete(public_path("../koperasiProd/" . $koperasi->foto_legalitas));
            $legalitasPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $legalitas->getClientOriginalName());
            $legalitas->move(public_path('../koperasiProd/'), $legalitasPath);
            $koperasi->update([
                'foto_legalitas' => $legalitasPath
            ]);
        }
        $koperasi->update([
            'informasi' => $request->informasi,
        ]);


        return redirect('/admin/list-koperasirw')->with('success', 'Informasi Koperasi Berhasil Diedit!');
    }
}
