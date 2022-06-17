<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurnia;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KurniaAdminController extends Controller
{
    // public function create()
    // {
    //     return view('admin.kurnia.add');
    // }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'judul_alur' => 'required',
    //         'caption_alur' => 'required',
    //         'foto_alur' => 'required',
    //         'judul_info' => 'required',
    //         'caption_info' => 'required',
    //         'foto_info' => 'required',
    //     ]);


    //     $file=$request->file('foto_alur');
    //     $file2=$request->file('foto_info');
    //     $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
    //     $foto2 = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file2->getClientOriginalName());
    //             $file->move(public_path('../kurniaProd/'), $foto);
    //             $file2->move(public_path('../kurniaProd/'), $foto2);
    //             Kurnia::insert( [
    //                 'judul_alur' => $request->judul_alur,
    //                 'caption_alur' => $request->caption_alur,
    //                 'foto_alur' => $foto,
    //                  'judul_info' => $request->judul_info,
    //                 'caption_info' => $request->caption_info,
    //                 'foto_info' => $foto2,
    //             ]);


    //     return redirect('/admin/list-kurnia')->with('success', 'Kurnia Berhasil Ditambahkan!');
    // }

    public function index()
    {
        $kurnia = Kurnia::groupBy('judul_alur','judul_info')->get();
        // $descriptions = DescriptionAdmin::first()->get();
        return view('admin.kurnia.list', compact('kurnia'));
    }

    public function edit($id)
    {
        $kurnia = Kurnia::findOrFail($id);
        return view('admin.kurnia.edit', compact('kurnia'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul_alur' => 'required',
            'caption_alur' => 'required',
            'judul_info' => 'required',
            'caption_info' => 'required',
            'deskripsi' => 'required'
        ]);

        $kurnia = Kurnia::findorfail($id);
        $alur = $request->file('foto_alur');
        $info = $request->file('foto_info');

        if ($alur != NULL) {
            File::delete(public_path("../kurniaProd/" . $kurnia->foto_alur));
            $alurPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $alur->getClientOriginalName());
            $alur->move(public_path('../kurniaProd/'), $alurPath);
            $kurnia->update([
                'foto_alur' => $alurPath,
            ]);
        }
        if ($info != null) {
            File::delete(public_path("../kurniaProd/" . $kurnia->foto_info));
            $infoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $info->getClientOriginalName());
            $info->move(public_path('../kurniaProd/'), $infoPath);
            $kurnia->update([
                'foto_info' => $infoPath
            ]);
        }
        $kurnia->update([
            'judul_alur' => $request->judul_alur,
            'caption_alur' => $request->caption_alur,
            'judul_info' => $request->judul_info,
            'caption_info' => $request->caption_info,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/admin/list-kurnia')->with('success', 'Kurnia Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('kurnia')->where('id', $id)->delete();
        return redirect('/admin/list-kurnia')->with('success', 'Kurnia Berhasil Dihapus!');
    }

 //  public function edit_desc($id)
 // {
 //        $descriptions = DescriptionAdmin::findOrFail($id);
 //        return view('admin.kurnia.editdesc', compact('descriptions'));
 //    }
//
 //    public function update_desc($id, Request $request)
 //    {
 //        $request->validate([
 //            'desc_kurnia' => 'required',
 //        ]);
//
 //        $descriptions = DescriptionAdmin::findOrFail($id);
 //        $descriptions_data = ["desc_kurnia" => $request["desc_kurnia"]];
 //        $descriptions->update($descriptions_data);

 //        return redirect('/admin/list-kurnia')->with('success', 'Deskripsi Berhasil Diupdate!');
 //   }
}

