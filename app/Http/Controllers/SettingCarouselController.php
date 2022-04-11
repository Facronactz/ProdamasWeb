<?php

namespace App\Http\Controllers;

use App\Models\SettingCarousel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = SettingCarousel::orderBy('id', 'desc')->get();
        return view('admin.carousel.list', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.carousel.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required',
            'foto' => 'image|nullable|max:1024',
        ]);
        $files = [];
        if ($request->file('foto')) {
            $file = $request->file('foto');
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('../carouselProd/'), $foto);
                $files[] = [
                    'nama' => strtoupper($request->nama),
                    'foto' => $foto
                ];
            }
        }
        SettingCarousel::insert($files);

        return redirect(url('admin/list-carousel'))->with('success', 'Bidang Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SettingCarousel  $settingCarousel
     * @return \Illuminate\Http\Response
     */
    public function show(SettingCarousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SettingCarousel  $settingCarousel
     * @return \Illuminate\Http\Response
     */
    public function edit(SettingCarousel $carousel)
    {
        //
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SettingCarousel  $settingCarousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SettingCarousel $carousel)
    {
        //
        $request->validate([
            'nama' => 'required',
            'foto' => 'mimes:jpeg,jpg,png|max:2200',
        
        ]); 
        $files = [];
        if ($request->file('foto')) {
            File::delete("carouselProd/" . $carousel->foto);
            $file = $request->file('foto');
            if ($file->isValid()) {
                $foto = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                $file->move(public_path('../carouselProd/'), $foto);
                $files = [
                    'nama' => strtoupper($request->nama),
                    'foto' => $foto
                ];
            }
        }
        $carousel->update($files);

        return redirect('/admin/list-carousel')->with('success', 'Carousel Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SettingCarousel  $settingCarousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SettingCarousel $carousel)
    {
        //
        $carousel->delete();
        return redirect('/admin/list-carousel')->with('success', 'Carousel Berhasil Dihapus!');
    }
}
