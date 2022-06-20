<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTrend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataTrendController extends Controller
{
    public function index()
    {
        $trend = DataTrend::first()->get();
        return view('admin.trend.list', compact('trend'));
    }

    public function edit($id)
    {
        $trend = DataTrend::findOrFail($id);
        return view('admin.trend.edit', compact('trend'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ]);

        $trend = DataTrend::findorfail($id);

        $trend->update([
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect('/admin/')->with('success', 'Data Trend Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $submission = DB::table('trend')->where('id', $id)->delete();
        return redirect('/admin/trend/{{1}}')->with('success', 'Data Trend Berhasil Dihapus!');
    }
}
