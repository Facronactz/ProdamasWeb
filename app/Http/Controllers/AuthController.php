<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
//BAGIAN ADMIN
    // public function registrasiadmin()
    // {
    //     return view('auths.registrasiadmin');
    // }

    // public function postadminlogin(Request $request)
    // {
    //     //dd($request->all());
    //     if(Auth::attempt($request->only('email', 'password'))) //email & password ini sama dengan name yang di isilogin
    //     {
    //         //pindah kehalaman admin
    //         return redirect('/master');
    //     }

    //     //kalau tidak berhasil akan kembali ke halaman login
    //     return redirect('/registrasiadmin');
    // }

    // public function logoutadmin()
    // {
    //     Auth::logoutadmin();
    //     return redirect('/');
    // }

// ==============================================================================

//BAGIAN USER
    public function index(){
        return view('auth.loginuser');
    }

    public function postlogin(Request $request){

        //email & password ini sama dengan name yang di loginuser
        if(Auth::attempt($request->only('username', 'password'))){

            //pindah ke halaman dashboard atau beranda
            return redirect('admin');
        }

        //gagal login
        return redirect('/loginuser');
    }

    public function registrasi(){
        return view('auth.registrasi');
    }

    public function postregist(Request $request){
        //untuk menyimpan data regist ke DB
        // User::create([
        //     'name' => $request->name,
        //     'level' => 'user',
        //     'email'=> $request->email,
        //     'telp' => $request->telp,
        //     'username' => $request->username,
        //     'password' => bcrypt($request->password),
        //     'remember_token' => Str::random(60),
        // ]);
        $validateData = $request->validate([
            'name' => 'required|max:120',
            'level' => 'null',
            'email' => 'required',
            'telp' => 'required',
            'username' => 'required',
            'password' => 'required',
            'remember_token' => 'null'
        ]);
        $data = new User();
        $data->name = $validateData['name'];
        $data->level = "user";
        $data->email = $validateData['email'];
        $data->telp = $validateData['telp'];
        $data->username = $validateData['username'];
        $data->password = $validateData['[password]'];
        $data->remember_token = Str::random(60);
        dump($data);
        $data->save();
        return redirect()->back()->with('pesan', "Cerita sudah di Submit");
        //kembali ke halaman login setelah submit
        // return redirect('/loginuser');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
