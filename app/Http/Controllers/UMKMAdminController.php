<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pict;
use App\Models\UMKM;
use App\Models\DescriptionAdmin;
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

    public function destroylist($id)
    {
        $submission = DB::table('umkm')->where('id', $id)->delete();
        return redirect('/admin/list-umkm')->with('success', 'UMKM Berhasil Dihapus!');
    }

    public function index()
    {
        $picts = Pict::first()->get();
        $umkms = UMKM::all();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.umkm.list', compact('picts', 'umkms', 'descriptions'));
    }

    public function edit_pict($id)
    {
        $picts = Pict::findOrFail($id);
        return view('admin.umkm.editpict', compact('picts'));
    }

    public function update_pict($id, Request $request)
    {
        $picts = Pict::findOrFail($id);
        $kota = $request->file('kota');
        $pesantren = $request->file('pesantren');
        $mojoroto = $request->file('mojoroto');

        if ($kota != null) {
            File::delete(public_path("../UMKMProd/" . $picts->kota));
            $kotaPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $kota->getClientOriginalName());
            $kota->move(public_path('../UMKMProd/'), $kotaPath);
            $picts->update([
                'kota' => $kotaPath,
            ]);
        }

        if ($pesantren != null) {
            File::delete(public_path("../UMKMProd/" . $picts->pesantren));
            $pesantrenPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $pesantren->getClientOriginalName());
            $pesantren->move(public_path('../UMKMProd/'), $pesantrenPath);
            $picts->update([
                'pesantren' => $pesantrenPath,
            ]);
        }

        if ($mojoroto != null) {
            File::delete(public_path("../UMKMProd/" . $picts->mojoroto));
            $mojorotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $mojoroto->getClientOriginalName());
            $mojoroto->move(public_path('../UMKMProd/'), $mojorotoPath);
            $picts->update([
                'mojoroto' => $mojorotoPath
            ]);
        }

        return redirect('/admin/list-umkm')->with('success', 'Picture Berhasil Diupdate!');
    }

    public function edit_desc($id)
    {
        $descriptions = DescriptionAdmin::findOrFail($id);
        return view('admin.umkm.editdesc', compact('descriptions'));
    }

    public function update_desc($id, Request $request)
    {
        $request->validate([
            'desc_umkm' => 'required',
        ]);


        $descriptions = DescriptionAdmin::findOrFail($id);
        $descriptions_data = ["desc_umkm" => $request["desc_umkm"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-umkm')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}
