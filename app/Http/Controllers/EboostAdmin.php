<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eboost;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class EboostAdmin extends Controller
{
    public function create()
    {
        return view('admin.eboost.add');
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'judul' => 'required',
    //         'foto' => 'required',
    //         'caption' => 'required',
    //     ]);

    //     $files = [];
    //     foreach ($request->file('foto') as $file) {
    //         if ($file->isValid()) {
    //             $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
    //             $file->move(public_path('../bidangProd/'), $foto);
    //             $files[] = [
    //                 'judul' => strtoupper($request->judul),
    //                 'foto' => $foto,
    //                 'caption' => $request->caption
    //             ];
    //         }
    //     }
    //     Eboost::insert($files);

    //     return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Ditambahkan!');
    // }

    public function index()
    {
        $Eboost = Eboost::groupBy('judul_tentang','judul_info')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.eboost.list', compact('Eboost', 'descriptions'));
    }

    public function edit($id)
    {
        $Eboost = Eboost::findOrFail($id);
        return view('admin.eboost.edit', compact('bidang'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required'
        ]);

        $Eboost = Eboost::findorfail($id);
        $file = $request->file('foto');
        if ($file != NULL) {
            File::delete(public_path("../bidangProd/" . $Eboost->foto));
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../bidangProd/'), $filePath);

            $Eboost->update([
                'judul' => $request->judul,
                'foto' => $filePath,
                'caption' => $request->caption
            ]);
        } else {
            $Eboost->update([
                'judul' => $request->judul,
                'caption' => $request->caption
            ]);
        }

        return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('eboost')->where('id', $id)->delete();
        return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Dihapus!');
    }

    public function edit_desc($id)
    {
        $descriptions = DescriptionAdmin::findOrFail($id);
        return view('admin.eboost.editdesc', compact('descriptions'));
    }

    public function update_desc($id, Request $request)
    {
        $request->validate([
            'desc_eboost' => 'required',
        ]);

        $descriptions = DescriptionAdmin::findOrFail($id);
        $descriptions_data = ["desc_eboost" => $request["desc_eboost"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-eboost')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}

