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
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);

        $file = $request->file('foto');
        $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
        $file->move(public_path('../UMKMProd/'), $foto);
        UMKM::insert([
            'judul' => $request->judul,
            'foto' => $foto,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'jenis' => $request->jenis,
            'tahun' => $request->tahun,
            'contact' => $request->contact,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/list-umkm')->with('success', 'UMKM Berhasil Ditambahkan!');
    }

    public function editlist($id)
    {
        $umkm = UMKM::findOrFail($id);
        return view('admin.umkm.editlist', compact('umkm'));
    }

    public function updatelist(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'jenis' => 'required',
            'tahun' => 'required',
            'contact' => 'required',
            'alamat' => 'required',
        ]);

        $umkms = UMKM::findOrFail($id);
        $file = $request->file('foto');
        if ($file != null) {
            $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../UMKMProd/'), $foto);
            $umkms->update([
                'judul' => $request->judul,
                'foto' => $foto,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'jenis' => $request->jenis,
                'tahun' => $request->tahun,
                'contact' => $request->contact,
                'alamat' => $request->alamat
            ]);
        } else {
            $umkms->update([
                'judul' => $request->judul,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'jenis' => $request->jenis,
                'tahun' => $request->tahun,
                'contact' => $request->contact,
                'alamat' => $request->alamat
            ]);
        }

        return redirect('/admin/list-umkm')->with('success', 'UMKM Berhasil Diedit!');
    }

    public function destroyreg($id)
    {
        $submission = DB::table('umkm')->where('id', $id)->delete();
        return redirect('/admin/list-umkm')->with('success', 'UMKM Berhasil Dihapus!');
    }

    public function index()
    {
        $picts = Pict::first()->get();
        $umkms = UMKM::all();
        return view('admin.umkm.list', compact('picts', 'umkms'));
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
