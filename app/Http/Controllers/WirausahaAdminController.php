<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wirausaha;
use App\Models\DescriptionAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class WirausahaAdminController extends Controller
{
    public function create()
    {
        return view('admin.wirausaha.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tentang' => 'required',
            'foto_tentang' => 'required',
            'info' => 'required',
            'foto_info' => 'required',
        ]);


        $file=$request->file('foto_tentang');
        $file2=$request->file('foto_info');
        $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
        $foto2 = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file2->getClientOriginalName());
                $file->move(public_path('../e-boostProd/'), $foto);
                $file2->move(public_path('../e-boostProd/'), $foto2);
                Wirausaha::insert( [
                    'tentang' => $request->tentang,
                    'foto_tentang' => $request->foto_tentang,
                    'foto_tentang' => $foto,
                    'info' => $request->info,
                    'foto_info' => $foto2,
                ]);


        return redirect('/admin/list-wirausaha')->with('success', 'Wirausaha Berhasil Ditambahkan!');
    }

    public function index()
    {
        $wirausaha = Wirausaha::groupBy('tentang','info')->get();
        $descriptions = DescriptionAdmin::first()->get();
        return view('admin.wirausaha.list', compact('wirausaha', 'descriptions'));
    }

    public function edit($id)
    {
        $wirausaha = Wirausaha::findOrFail($id);
        return view('admin.wirausaha.edit', compact('wirausaha'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'tentang' => 'required',
            'foto_tentang' => 'required',
            'info' => 'required',
            'foto_info' => 'required',
        ]);

        $wirausaha = Wirausaha::findorfail($id);
        $tentang = $request->file('foto_tentang');
        $info = $request->file('foto_info');

        if ($tentang != NULL) {
            File::delete(public_path("../e-boostProd/" . $eboost->foto_tentang));
            $tentangPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $tentang->getClientOriginalName());
            $tentang->move(public_path('../e-boostProd/'), $tentangPath);
            $eboost->update([
                'foto_tentang' => $tentangPath,
            ]);
        }
        if ($info != null) {
            File::delete(public_path("../e-boostProd/" . $eboost->foto_info));
            $infoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $info->getClientOriginalName());
            $info->move(public_path('../e-boostProd/'), $infoPath);
            $eboost->update([
                'foto_info' => $infoPath
            ]);
        }    
        $wirausaha->update([
            'tentang' => $request->tentang,
            'foto_tentang' => $request->foto_tentang,
            'foto_tentang' => $foto,
            'info' => $request->info,
            'foto_info' => $foto2,
            ]);

        // }else {
        //     $wirausaha->update([
        //         'tentang' => $request->tentang,
        //         'info' => $request->info,
        //     ]);
        // }

        return redirect('/admin/list-wirausaha')->with('success', 'Wirausaha Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('wirausaha')->where('id', $id)->delete();
        return redirect('/admin/list-wirausaha')->with('success', 'Wirausaha Berhasil Dihapus!');
    }

}