<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokmas;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PokmasAdminController extends Controller
{
    public function create()
    {
        return view('admin.pokmas.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required',
            'caption' => 'required',
        ]);

        $files = [];
        foreach ($request->file('foto') as $file) {
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('../pokmasProd/'), $foto);
                $files[] = [
                    'foto' => $foto,
                    'caption' => $request->caption
                ];
            }
        }
        pokmas::insert($files);

        return redirect('/admin/list-pokmas')->with('success', 'Pokmas Berhasil Ditambahkan!');
    }

    public function index()
    {
        $pokmass = pokmas::groupBy('id')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.pokmas.list', compact('pokmass', 'descriptions'));
    }

    public function edit($id)
    {
        $pokmas = pokmas::findOrFail($id);
        return view('admin.pokmas.edit', compact('pokmas'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required'
        ]);

        $pokmass = pokmas::findorfail($id);
        if ($request->has('picture')) {
            File::delete("pokmasProd//" . $pokmass->foto);
            $picture = $request->foto;
            $pathFoto = time() . ' - ' . $picture->getClientOriginalName();
            $picture->move('pokmasProd//', $pathFoto);

            $pokmas_data = [
                "foto" => $pathFoto,
                "caption" => $request["caption"],
            ];
        } else {
            $pokmas_data = [
                "caption" => $request["caption"]
            ];
        }

        $pokmass->update($pokmas_data);

        return redirect('/admin/list-pokmas')->with('success', 'Pokmas Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('pokmass')->where('id', $id)->delete();
        return redirect('/admin/list-pokmas')->with('success', 'Pokmas Berhasil Dihapus!');
    }

    public function edit_desc()
    {
        $descriptions = DescriptionAdmin::first();
        return view('admin.pokmas.editdesc', compact('descriptions'));
    }

    public function update_desc(Request $request)
    {
        $request->validate([
            'desc_pokmas' => 'required',
        ]);

        $descriptions = DescriptionAdmin::first();
        $descriptions_data = ["desc_pokmas" => $request["desc_pokmas"]];
        $descriptions->update($descriptions_data);

        return redirect('/admin/list-pokmas')->with('success', 'Deskripsi Berhasil Diupdate!');
    }
}
