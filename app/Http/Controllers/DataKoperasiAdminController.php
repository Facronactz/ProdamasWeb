<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use App\Models\DataKoperasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataKoperasiAdminController extends Controller
{
    public function index()
    {
        $datakoperasi = DataKoperasi::first()->get();
        return view('admin.datakoperasi.list', compact('datakoperasi'));
    }

    public function edit($id)
    {
        $datakoperasi = DataKoperasi::findOrFail($id);
        return view('admin.datakoperasi.edit', compact('datakoperasi'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tableau' => 'required',
            'konten' => 'required',
            'sumber' => 'required'
        ]);

        $datakoperasi = DataKoperasi::findorfail($id);

        $datakoperasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tableau' => $request->tableau,
            'konten' => $request->konten,
            'sumber' => $request->sumber,
        ]);

        return redirect('/admin/list-datakoperasi')->with('success', 'Data Koperasi Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('data_koperasi')->where('id', $id)->delete();
        return redirect('/admin/list-datakoperasi')->with('success', 'Data Koperasi Berhasil Dihapus!');
    }
}
