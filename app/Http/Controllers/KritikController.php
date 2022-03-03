<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\kritik;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kritik.index');
    }

    public function storeContactForm(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
        ];

        $request->validate([
            'name' => 'required',
            'phone' => 'required|min:11|numeric',
            'email' => 'required|email',
            'message' => 'required',
        ], $messages);

        $input = $request->all();
//         var_dump($request); 
        
        kritik::create($input);

        //  Send mail to admin
//         Mail::send('kritik.kritikMail', array(
//             'name' => $input['name'],
//             'phone' => $input['phone'],
//             'email' => $input['email'],
//             'bodyMessage' => $input['message'],
//         ), function ($message) use ($request){
//             $message->from($request->email);
//             $message->to('prodamas.pemkotkediri@gmail.com', 'Kritik & Saran Prodamas')->subject('Kritik & Saran dari Website Prodamas');

//         });

        return redirect()->back()->with(['success' => 'Terkirim! Terimakasih atas Kritik & Saran Anda']);
    }


}
