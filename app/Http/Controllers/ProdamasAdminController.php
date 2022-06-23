<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodamas;
use App\Models\Regulasi;
use App\Models\Transform;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProdamasAdminController extends Controller
{
    public function createcont()
    {
        return view('admin.prodamas.addcont');
    }

    public function storecont(Request $request)
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
                $file->move(public_path('../prodamasProd/'), $foto);
                $files[] = [
                    'judul' => $request->judul,
                    'foto' => $foto,
                    'caption' => $request->caption
                ];
            }
        }
        prodamas::insert($files);

        return redirect('/admin/list-prodamas')->with('success', 'Konten Berhasil Ditambahkan!');
    }

    public function index()
    {
        $prodamass = prodamas::latest()->get();
        $regulasis = regulasi::latest()->get();
        $transforms = transform::latest()->get();
        return view('admin.prodamas.list', compact('prodamass', 'regulasis', 'transforms'));
    }

    public function editcont($id)
    {
        $prodamas = prodamas::findOrFail($id);
        return view('admin.prodamas.editcont', compact('prodamas'));
    }

    public function updatecont($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required'
        ]);

        $prodamass = Prodamas::findOrFail($id);

        $foto = $request->file('foto');
        if ($foto != NULL) {
            File::delete(public_path("../prodamasProd/" . $prodamass->foto));
            $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto->getClientOriginalName());
            $foto->move(public_path('../prodamasProd/'), $fotoPath);

            $prodamass->update([
                'judul' => $request->judul,
                'foto' => $fotoPath,
                'caption' => $request->caption
            ]);
        } else {
            $prodamass->update([
                'judul' => $request->judul,
                'caption' => $request->caption
            ]);
        }

        return redirect('/admin/list-prodamas')->with('success', 'Konten Berhasil Diupdate!');
    }

    public function destroycont($id)
    {
        $submission = DB::table('prodamas')->where('id', $id)->delete();
        return redirect('/admin/list-prodamas')->with('success', 'prodamas Berhasil Dihapus!');
    }

    public function edittrans()
    {
        $transform = transform::first();
        return view('admin.prodamas.edittrans', compact('transform'));
    }

    public function updatetrans(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
            'caption' => 'required'
        ]);

        $transforms = Transform::first();

        $foto = $request->file('foto');
        if ($foto != NULL) {
            File::delete(public_path("../prodamasProd/" . $transforms->foto));
            $fotoPath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $foto->getClientOriginalName());
            $foto->move(public_path('../prodamasProd/'), $fotoPath);

            $transforms->update([
                'judul' => $request->judul,
                'foto' => $fotoPath,
                'caption' => $request->caption
            ]);
        } else {
            $transforms->update([
                'judul' => $request->judul,
                'caption' => $request->caption
            ]);
        }

        return redirect('/admin/list-prodamas')->with('success', 'Transformasi Berhasil Diupdate!');
    }

    public function createreg()
    {
        return view('admin.prodamas.addreg');
    }

    public function storereg(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'file' => 'required',
            'sumber' => 'required',
        ]);

        $pdfs = [];
        foreach ($request->file('file') as $pdf) {
            if ($pdf->isValid()) {
                $file = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $pdf->getClientOriginalName());
                $pdf->move(public_path('../regulasiProd/'), $file);
                $pdfs[] = [
                    'judul' => $request->judul,
                    'file' => $file,
                    'sumber' => $request->sumber
                ];
            }
        }
        regulasi::insert($pdfs);

        return redirect('/admin/list-prodamas')->with('success', 'Regulasi Berhasil Ditambahkan!');
    }

    public function editreg($id)
    {
        $regulasi = regulasi::findOrFail($id);
        return view('admin.prodamas.editreg', compact('regulasi'));
    }

    public function updatereg($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'sumber' => 'required'
        ]);

        $regulasis = regulasi::findorfail($id);
        $file = $request->file('file');
        if ($file != NULL) {
            File::delete(public_path("../regulasiProd/" . $regulasis->file));
            $filePath = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
            $file->move(public_path('../regulasiProd/'), $filePath);

            $regulasis->update([
                'judul' => $request->judul,
                'file' => $filePath,
                'sumber' => $request->sumber
            ]);
        } else {
            $regulasis->update([
                'judul' => $request->judul,
                'sumber' => $request->sumber
            ]);
        }

        return redirect('/admin/list-prodamas')->with('success', 'Regulasi Berhasil Diupdate!');
    }

    public function destroyreg($id)
    {
        $submission = DB::table('regulasi')->where('id', $id)->delete();
        return redirect('/admin/list-prodamas')->with('success', 'Regulasi Berhasil Dihapus!');
    }
}
