<?php

namespace App\Http\Controllers;

use App\Models\Tulis_cerita;
use Illuminate\Http\Request;

class TulisCeritaController extends Controller
{
    public function index(){
        return view('tulisCerita.index');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:120',
            'nomor_telepon' => 'required|max:15',
            'email' => 'required',
            'judul' => 'required',
            'isi' => 'required',
            'thumbnail' => 'required|file|image|max:1000',
            'foto' => 'required|file|image|max:1000'
        ]);
        // dump($request);

        // thumbnail
        $extThumb = $request->thumbnail->getClientOriginalExtension();
        $pathThumb = "thumbnail-".time().".".$extThumb;
        $pathStore = $request->thumbnail->move(public_path('imgCerita/thumb'), $pathThumb);

        // foto
        $extFoto = $request->foto->getClientOriginalExtension();
        $pathFoto = "foto-".time().".".$extFoto;
        $pathStore = $request->foto->move(public_path('imgCerita/foto'), $pathFoto);

        // dump($validateData);
        $data = new Tulis_cerita();
        $data->nama = $validateData['nama'];
        $data->nomor_telepon = $validateData['nomor_telepon'];
        $data->email = $validateData['email'];
        $data->judul = $validateData['judul'];
        $data->isi = $validateData['isi'];
        $data->thumbnail = $pathThumb;
        $data->foto = $pathFoto;
        // dump($data);
        $data->save();

        return redirect()->back()->with('pesan', "Cerita sudah di Submit");
        // return view('tulisCerita.index')->with('pesan', "Cerita sudah di Submit");
    }
}
