<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    //
    public function create()
    {
        return view('beranda.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            if (!Newsletter::isSubscribed($request->email)) {
                Newsletter::subscribePending($request->email);
                return redirect('beranda.index')->with('success', 'Terima Kasih Sudah Berlangganan, Silahkan Cek Email.');
            }
            return redirect('beranda.index')->with('error', 'Maaf! Anda Sudah Berlangganan. ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
