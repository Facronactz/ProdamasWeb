<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MenuAdminController extends Controller
{
    public function create()
    {
        return view('admin.menu.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'link' => 'required',
            'status' => 'required'
        ]);

        menu::insert([
            'judul' => $request->judul,
            'link' => $request->link,
            'status' => $request->status
        ]);

        return redirect('/admin/list-menu')->with('success', 'Menu Berhasil Ditambahkan!');
    }

    public function index()
    {
        $menus = menu::latest()->get();
        return view('admin.menu.list', compact('menus'));
    }

    public function edit($id)
    {
        $menu = menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required',
        ]);

        $menus = menu::findorfail($id);
        $menus->update([
            'judul' => $request->judul,
            'link' => $request->link,
        ]);

        return redirect('/admin/list-menu')->with('success', 'Menu Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('menu')->where('id', $id)->delete();
        return redirect('/admin/list-menu')->with('success', 'Menu Berhasil Dihapus!');
    }

    public function status(Request $request)
    {
        Menu::where('id', $request->id)->update(['status' => $request->status]);
        return back();
    }
}
