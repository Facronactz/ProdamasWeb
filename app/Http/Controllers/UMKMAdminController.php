<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pict;
use App\Models\UMKM;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UMKMAdminController extends Controller
{
    public function createlist()
    {
        return view('admin.umkm.addlist');
    }

    public function storelist(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required',
            'kelurahan' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);

        $files = [];
        foreach ($request->file('foto') as $file) {
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('../UMKMProd/'), $foto);
                $files[] = [
                    'judul' => $request->judul,
                    'foto' => $foto,
                    'kelurahan' => $request->kelurahan,
                    'jenis' => $request->jenis,
                    'tahun' => $request->tahun,
                    'contact' => $request->contact,
                    'alamat' => $request->alamat
                ];
            }
        }
        UMKM::insert($files);

        return redirect('/admin/list-umkm')->with('success', 'Konten Berhasil Ditambahkan!');
    }

    public function index()
    {
        $picts = Pict::first()->get();
        return view('admin.umkm.list', compact('picts'));
    }

    public function edit_pict($id)
    {
        $picts = Pict::findOrFail($id);
        return view('admin.umkm.editpict', compact('picts'));
    }

    public function update_pict($id, Request $request)
    {
        $request->validate([
            'kota' => 'required',
            'pesantren' => 'required',
            'mojoroto' => 'required',
        ]);

        $picts = Pict::findOrFail($id);
        $kota = $request->file('kota');
        $pesantren = $request->file('pesantren');
        $mojoroto = $request->file('mojoroto');

        File::delete(public_path("../UMKMProd/" . $picts->kota));
        File::delete(public_path("../UMKMProd/" . $picts->pesantren));
        File::delete(public_path("../UMKMProd/" . $picts->mojoroto));
        $kotaPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $kota->getClientOriginalName());
        $pesantrenPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $pesantren->getClientOriginalName());
        $mojorotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $mojoroto->getClientOriginalName());
        $kota->move(public_path('../UMKMProd/'), $kotaPath);
        $pesantren->move(public_path('../UMKMProd/'), $pesantrenPath);
        $mojoroto->move(public_path('../UMKMProd/'), $mojorotoPath);

        $picts->update([
            'kota' => $kotaPath,
            'pesantren' => $pesantrenPath,
            'mojoroto' => $mojorotoPath
        ]);

        return redirect('/admin/list-umkm')->with('success', 'Picture Berhasil Diupdate!');
    }
}
