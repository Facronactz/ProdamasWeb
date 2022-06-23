<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koperasirw;
use App\Models\Pict;
use App\Models\KoperasiDaftar;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class KoperasiAdminController extends Controller
{
    public function index()
    {
        $koperasi = Koperasirw::first()->get();
        $picts = Pict::first()->get();
        $daftar = KoperasiDaftar::latest()->get();
        return view('admin.koperasirw.list', compact('koperasi', 'picts', 'daftar'));
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

    //sampul per kecamatan
    public function edit_pict($id)
    {
        $picts = Pict::findOrFail($id);
        return view('admin.koperasirw.editpict', compact('picts'));
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

        return redirect('/admin/list-koperasirw')->with('success', 'Foto Sentra Koperasi RW Berhasil Diupdate!');
    }

    //daftar koperasi
    public function createlist()
    {
        return view('admin.koperasirw.adddaftar');
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
        $file->move(public_path('../koperasidaftarProd/'), $foto);
        KoperasiDaftar::insert([
            'judul' => $request->judul,
            'foto' => $foto,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'jenis' => $request->jenis,
            'tahun' => $request->tahun,
            'contact' => $request->contact,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/list-koperasirw')->with('success', 'Koperasi Baru Berhasil Ditambahkan!');
    }

    public function editlist($id)
    {
        $daftar = KoperasiDaftar::findOrFail($id);
        return view('admin.koperasirw.editdaftar', compact('daftar'));
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

        $daftar = KoperasiDaftar::findOrFail($id);
        $file = $request->file('foto');
        if ($file != null) {
            $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../koperasidaftarProd/'), $foto);
            $daftar->update([
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
            $daftar->update([
                'judul' => $request->judul,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'jenis' => $request->jenis,
                'tahun' => $request->tahun,
                'contact' => $request->contact,
                'alamat' => $request->alamat
            ]);
        }

        return redirect('/admin/list-koperasirw')->with('success', 'Koperasi Berhasil Diedit!');
    }

    public function destroylist($id)
    {
        $submission = DB::table('koperasi_daftar')->where('id', $id)->delete();
        return redirect('/admin/list-koperasirw')->with('success', 'Koperasi Berhasil Dihapus!');
    }

}
