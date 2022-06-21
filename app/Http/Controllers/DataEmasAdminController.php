<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnglishMasive;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataEmasAdminController extends Controller
{
    public function index()
    {
        $dataemass = EnglishMasive::first()->get();
        return view('admin.englishmasive.list', compact('dataemass'));
    }

    public function edit($id)
    {
        $dataemas = EnglishMasive::findOrFail($id);
        return view('admin.englishmasive.edit', compact('dataemas'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'judul_tutor' => 'required',
            'tableau_tutor' => 'required',
            'judul_partisipan' => 'required',
            'tableau_partisipan' => 'required',
            'konten' => 'required',
            'sumber' => 'required',
        ]);

        $dataemas = EnglishMasive::findorfail($id);

        $dataemas->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'judul_tutor' => $request->judul_tutor,
            'tableau_tutor' => $request->tableau_tutor,
            'judul_partisipan' => $request->judul_partisipan,
            'tableau_partisipan' => $request->tableau_partisipan,
            'konten' => $request->konten,
            'sumber' => $request->sumber,
        ]);

        return redirect('/admin/list-englishmasive')->with('success', 'Data Emas Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('english_masive')->where('id', $id)->delete();
        return redirect('/admin/list-englishmasive')->with('success', 'Data Emas Berhasil Dihapus!');
    }
}
