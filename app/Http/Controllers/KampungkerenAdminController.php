<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampungkeren;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class KampungkerenAdminController extends Controller
{
    public function create()
    {
        return view('admin.kampungkeren.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'foto' => 'required',
            'caption' => 'required',
        ]);

        $files = [];
        foreach ($request->file('foto') as $file) {
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('../public/kampungkerenProd/'), $foto);
                $files[] = [
                    'judul' => $request->judul,
                    'foto' => $foto,
                    'caption' => $request->caption
                ];
            }
        }
        Kampungkeren::insert($files);

        return redirect('/admin/list-kampungkeren')->with('success', 'Kampung Keren Berhasil Ditambahkan!');
    }

    public function index()
    {
        $kampungkeren = Kampungkeren::groupBy('judul')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.kampungkeren.list', compact('kampungkeren', 'descriptions'));
    }

    public function edit($id)
    {
        $kampungkeren = Kampungkeren::findOrFail($id);
        return view('admin.kampungkeren.edit', compact('kampungkeren'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required'
        ]);

        $kampungkeren = Kampungkeren::findorfail($id);
        if ($request->has('picture')) {
            File::delete("kampungkerenProd//" . $kampungkeren->picture);
            $picture = $request->picture;
            $pathFoto = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('kampungkerenProd//', $pathFoto);

            $kampungkeren_data = [
                "judul" => $request["judul"],
                "foto" => $pathFoto,
                "caption" => $request["caption"],
            ];
        } else {
            $kampungkeren_data = [
                "judul" => $request["judul"],
                "caption" => $request["caption"]
            ];
        }

        $kampungkeren->update($kampungkeren_data);

        return redirect('/admin/list-kampungkeren')->with('success', 'Kampung Keren Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('kampungkeren')->where('id', $id)->delete();
        return redirect('/admin/list-kampungkeren')->with('success', 'Kampung Keren Berhasil Dihapus!');
    }

    public function edit_desc()
    {
        $descriptions = DescriptionAdmin::first();
        return view('admin.kampungkeren.editdesc', compact('descriptions'));
    }

    public function update_desc(Request $request)
    {
        $request->validate([
            'desc_kampungkeren' => 'required',
        ]);


        $descriptions = DescriptionAdmin::first();
        $descriptions_data = ["desc_kampungkeren" => $request["desc_kampungkeren"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-kampungkeren')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}
