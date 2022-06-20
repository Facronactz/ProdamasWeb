<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AnggaranAdminController extends Controller
{
    public function index()
    {
        $anggarans = Anggaran::first()->get();
        return view('admin.anggaran.list', compact('anggaran'));
    }

    public function edit($id)
    {
        $anggaran = Anggaran::findOrFail($id);
        return view('admin.anggaran.edit', compact('anggaran'));
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

        $anggaran = anggaran::findorfail($id);

        $anggaran->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tebleau' => $request->tebleau,
            'konten' => $request->konten,
            'sumber' => $request->sumber,
        ]);

        return redirect('/admin/list-anggaran')->with('success', 'Anggaran Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('anggaran')->where('id', $id)->delete();
        return redirect('/admin/list-anggaran')->with('success', 'Anggaran Berhasil Dihapus!');
    }
}
