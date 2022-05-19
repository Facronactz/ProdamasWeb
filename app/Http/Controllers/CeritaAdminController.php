<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CeritaAdmin;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\mb_strimwidth;

class CeritaAdminController extends Controller
{
    public function index()
    {
        $tulis_ceritas = CeritaAdmin::all();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.tuliscerita.list', compact('tulis_ceritas', 'descriptions'));
    }
    public function create()
    {
        return view('admin.tuliscerita.add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'ringkasan' => 'required',
            'file' => 'mimes:pdf|max:2048',
            'foto' => 'mimes:jpeg,jpg,png|max:2200'
        ]);

        $foto = $request->foto;
        $new_foto = time() . ' - ' . $foto->getClientOriginalName();
        $file = $request->file;
        $new_file = time() . ' - ' . $file->getClientOriginalName();

        $tulis_ceritas =new CeritaAdmin;
        $tulis_ceritas->nama = $request->nama;
        $tulis_ceritas->nomor_telepon =  $request->nomor_telepon;
        $tulis_ceritas->email = $request->email;
        $tulis_ceritas->judul = $request->judul;
        $tulis_ceritas->ringkasan = $request->ringkasan;
        $tulis_ceritas->foto = $new_foto;
        $tulis_ceritas->file = $new_file;

        // dd($tulis_ceritas);

        $foto->move(public_path('../ceritaProd/sampul/'), $new_foto);  
        $file->move(public_path('../ceritaProd/file/'), $new_file);        
        $tulis_ceritas->save();

        return redirect('/admin/list-tuliscerita')->with('success', 'Cerita Berhasil Ditambahkan!');
    }

    public function edit($id) {
        $tulis_ceritas = CeritaAdmin::findOrFail($id);
        return view('admin.tuliscerita.edit',compact('tulis_ceritas'));
    }
    public function update($id, Request $request) {
        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required',
            'judul' => 'required',
            'ringkasan' => 'required',
            'file' => 'mimes:pdf,xlx,csv|max:2048',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
        ]);

        $tulis_ceritas = CeritaAdmin::findorfail($id);
        if ($request->has('foto')) {
            File::delete("../ceritaProd/sampul/".$tulis_ceritas->foto);
            $foto = $request->foto;
            $new_foto = time() . ' - ' . $foto->getClientOriginalName();
            $foto->move('ceritaProd/sampul/', $new_foto);
            $tulis_ceritas_data = [
                "nama" => $request["nama"],
                "nomor_telepon" => $request["nomor_telepon"],
                "email" => $request["email"],
                "judul" => $request["judul"],
                "ringkasan" => $request["ringkasan"],
                "foto" => $new_foto,
            ];
        } elseif ($request->has('file')){
            File::delete("../ceritaProd/file/".$tulis_ceritas->file);
            $file = $request->file;
            $new_file = time() . ' - ' . $file->getClientOriginalName();
            $file->move('ceritaProd/file/', $new_file);
            $tulis_ceritas_data = [
                "nama" => $request["nama"],
                "nomor_telepon" => $request["nomor_telepon"],
                "email" => $request["email"],
                "judul" => $request["judul"],
                "ringkasan" => $request["ringkasan"],
                "file" => $new_file,
            ];
        } else {
            $tulis_ceritas_data = [
                "nama" => $request["nama"],
                "nomor_telepon" => $request["nomor_telepon"],
                "email" => $request["email"],
                "judul" => $request["judul"],
                "ringkasan" => $request["ringkasan"],
            ];
        }
        
        $tulis_ceritas->update($tulis_ceritas_data);

        return redirect('/admin/list-tuliscerita')->with('success', 'Cerita Berhasil Diedit!');
    }
    public function destroy($id) {
        $submission = DB::table('tulis_ceritas')->where('id', $id)->delete($id);
        return redirect('/admin/list-tuliscerita')->with('success', 'Submission successfully deleted!');
    }
    public function edit_desc($id)
    {
        $descriptions = DescriptionAdmin::findOrFail($id);
        return view('admin.tuliscerita.editdesc', compact('descriptions'));
    }
    public function update_desc($id, Request $request)
    {
        $request->validate([
            'desc_tuliscerita' => 'required',
        ]);


        $descriptions = DescriptionAdmin::findOrFail($id);
        $descriptions_data = ["desc_tuliscerita" => $request["desc_tuliscerita"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-tuliscerita')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}
