<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pict;

class UMKMAdminController extends Controller
{
    public function index()
    {
        $picts = Pict::first()->get();
        return view('admin.umkm.list', compact('picts'));
    }

    public function edit_pict($id)
    {
        $picts = Pict::findOrFail($id);
        return view('admin.umkm.editpict', compact('picts'));
    }

    public function update_pict($id, Request $request)
    {
        $request->validate([
            'foto_kota' => 'required',
            'foto_pesantren' => 'required',
            'foto_mojoroto' => 'required',
        ]);

        $picts = Pict::findOrFail($id);
        $picts_data = [
            "foto_kota" => $request["foto_kota"],
            "foto_pesantren" => $request["foto_pesantren"],
            "foto_mojoroto" => $request["foto_mojoroto"],
        ];
        $picts->update($picts_data);

        return redirect('/admin/list-umkm')->with('success', 'Picture Berhasil Diupdate!');
    }
}
