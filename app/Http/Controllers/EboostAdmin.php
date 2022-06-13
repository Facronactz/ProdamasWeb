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

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_tentang' => 'required',
            'caption_tentang' => 'required',
            'foto_tentang' => 'required',
            'judul_info' => 'required',
            'caption_info' => 'required',
            'foto_info' => 'required',
        ]);


        $file=$request->file('foto_tentang');
        $file2=$request->file('foto_info');
        $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
        $foto2 = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file2->getClientOriginalName());
                $file->move(public_path('../fotoProd/'), $foto);
                $file2->move(public_path('../fotoProd/'), $foto2);
                Eboost::insert( [
                    'judul_tentang' => $request->judul_tentang,
                    'caption_tentang' => $request->caption_tentang,
                    'foto_tentang' => $foto,
                     'judul_info' => $request->judul_info,
                    'caption_info' => $request->caption_info,
                    'foto_info' => $foto2,
                ]);


        return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Ditambahkan!');
    }

    public function index()
    {
        $eboost = Eboost::groupBy('judul_tentang','judul_info')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.eboost.list', compact('eboost', 'descriptions'));
    }

    public function edit($id)
    {
        $eboost = Eboost::findOrFail($id);
        return view('admin.eboost.edit', compact('eboost'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'judul_tentang' => 'required',
            'caption_tentang' => 'required',
            'foto_tentang' => 'required',
            'judul_info' => 'required',
            'caption_info' => 'required',
            'foto_info' => 'required',
        ]);

        $eboost = Eboost::findorfail($id);
        $file = $request->file('foto_tentang','foto_info');
        if ($file != NULL) {
           $file= $request->file('foto_tentang');
           $file2= $request->file('foto_info');
            $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('upload_foto_tentang')->getClientOriginalName(). '.'. $request->file('foto_tentang')->getClientOriginalExtension());
            $foto2 = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('upload_foto_info')->getClientOriginalName(). '.' . $request->file('foto_info')->getClientOriginalExtension());
                    $request->file('foto_tentang')->move(public_path('../fotoProd/'), $foto);
                    $request->file('foto_info')->move(public_path('../fotoProd/'), $foto2);
            

            $eboost->update([
                'judul_tentang' => $request->judul_tentang,
                    'caption_tentang' => $request->caption_tentang,
                    'foto_tentang' => $foto,
                     'judul_info' => $request->judul_info,
                    'caption_info' => $request->caption_info,
                    'foto_info' => $foto2,
            ]);
        } else {
            $eboost->update([
                'judul_tentang' => $request->judul_tentang,
                    'caption_tentang' => $request->caption_tentang,
                     'judul_info' => $request->judul_info,
                    'caption_info' => $request->caption_info,
            ]);
        }

        return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('eboost')->where('id', $id)->delete();
        return redirect('/admin/list-eboost')->with('success', 'Eboost Berhasil Dihapus!');
    }

 //  public function edit_desc($id)
 // {
 //        $descriptions = DescriptionAdmin::findOrFail($id);
 //        return view('admin.eboost.editdesc', compact('descriptions'));
 //    }
//
 //    public function update_desc($id, Request $request)
 //    {
 //        $request->validate([
 //            'desc_eboost' => 'required',
 //        ]);
//
 //        $descriptions = DescriptionAdmin::findOrFail($id);
 //        $descriptions_data = ["desc_eboost" => $request["desc_eboost"]];
 //        $descriptions->update($descriptions_data);

 //        return redirect('/admin/list-eboost')->with('success', 'Deskripsi Berhasil Diupdate!');
 //   }
}

