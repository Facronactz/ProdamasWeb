<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RTH;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RTHAdminController extends Controller
{
    public function index()
    {
        $rths = Rth::first()->get();
        return view('admin.rth.list', compact('rths'));
    }

    public function edit($id)
    {
        $rth = Rth::findOrFail($id);
        return view('admin.rth.edit', compact('rth'));
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

        $rth = rth::findorfail($id);

        $rth->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tableau' => $request->tableau,
            'konten' => $request->konten,
            'sumber' => $request->sumber,
        ]);

        return redirect('/admin/list-rth')->with('success', 'RTH Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('rth')->where('id', $id)->delete();
        return redirect('/admin/list-rth')->with('success', 'RTH Berhasil Dihapus!');
    }
}
