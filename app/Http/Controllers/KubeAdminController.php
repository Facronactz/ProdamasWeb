<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kube;
use App\Models\Pict;
use App\Models\KubeDaftar;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class KubeAdminController extends Controller
{
    public function create()
    {
        //
        return view('admin.kube.add');
    }
    public function index()
    {
        $kube = Kube::first()->get();
        $picture = Pict::first()->get();
        $daftar = KubeDaftar::first()->get();
        return view('admin.kube.list', compact('kube', 'picture', 'daftar'));
    }

    public function edit($id)
    {
        $kube = Kube::findOrFail($id);
        return view('admin.kube.edit', compact('kube'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'informasi' => 'required',
        ]);
        $kube = Kube::findOrFail($id);
        $syarat = $request->file('foto_syarat');
        $alur = $request->file('foto_alur');

        if ($syarat != null) {
            File::delete(public_path("../kubeProd/" . $kube->foto_syarat));
            $syaratPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $syarat->getClientOriginalName());
            $syarat->move(public_path('../kubeProd/'), $syaratPath);
            $kube->update([
                'foto_syarat' => $syaratPath,
            ]);
        }

        if ($alur != null) {
            File::delete(public_path("../kubeProd/" . $kube->foto_alur));
            $alurPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $alur->getClientOriginalName());
            $alur->move(public_path('../kubeProd/'), $alurPath);
            $kube->update([
                'foto_alur' => $alurPath,
            ]);
        }

    
        $kube->update([
            'informasi' => $request->informasi,
        ]);


        return redirect('/admin/list-kube')->with('success', 'Informasi Kube Berhasil Diedit!');
    }

    //sampul per kecamatan
    public function edit_pict($id)
    {
        $picture = Pict::findOrFail($id);
        return view('admin.kube.editpict', compact('picture'));
    }

    public function update_pict($id, Request $request)
    {
        $picture = Pict::findOrFail($id);
        $kota = $request->file('kota');
        $pesantren = $request->file('pesantren');
        $mojoroto = $request->file('mojoroto');

        if ($kota != null) {
            File::delete(public_path("../UMKMProd/" . $picture->kota));
            $kotaPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $kota->getClientOriginalName());
            $kota->move(public_path('../UMKMProd/'), $kotaPath);
            $picture->update([
                'kota' => $kotaPath,
            ]);
        }

        if ($pesantren != null) {
            File::delete(public_path("../UMKMProd/" . $picture->pesantren));
            $pesantrenPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $pesantren->getClientOriginalName());
            $pesantren->move(public_path('../UMKMProd/'), $pesantrenPath);
            $picture->update([
                'pesantren' => $pesantrenPath,
            ]);
        }

        if ($mojoroto != null) {
            File::delete(public_path("../UMKMProd/" . $picture->mojoroto));
            $mojorotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $mojoroto->getClientOriginalName());
            $mojoroto->move(public_path('../UMKMProd/'), $mojorotoPath);
            $picture->update([
                'mojoroto' => $mojorotoPath
            ]);
        }

        return redirect('/admin/list-kube')->with('success', 'Foto Sentra Kube Berhasil Diupdate!');
    }

    //daftar kube
    public function createlist()
    {
        return view('admin.kube.adddaftar');
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
        $file->move(public_path('../kubedaftarProd/'), $foto);
        KubeDaftar::insert([
            'judul' => $request->judul,
            'foto' => $foto,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'jenis' => $request->jenis,
            'tahun' => $request->tahun,
            'contact' => $request->contact,
            'alamat' => $request->alamat
        ]);

        return redirect('/admin/list-kube')->with('success', 'Kube Baru Berhasil Ditambahkan!');
    }

    public function editlist($id)
    {
        $daftar = KubeDaftar::findOrFail($id);
        return view('admin.kube.editdaftar', compact('daftar'));
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

        $daftar = KubeDaftar::findOrFail($id);
        $file = $request->file('foto');
        if ($file != null) {
            $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../kubedaftarProd/'), $foto);
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

        return redirect('/admin/list-kube')->with('success', 'Kube Berhasil Diedit!');
    }
    public function destroylist($id)
    {
        $submission = DB::table('kube_sentra')->where('id', $id)->delete();
        return redirect('/admin/list-kube')->with('success', 'Kube Berhasil Dihapus!');
    }

}
