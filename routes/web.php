<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BincangController;
use App\Http\Controllers\EditprofilController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\artikelController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TulisCeritaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FotoAdminController;
use App\Http\Controllers\VideoAdminController;
use App\Http\Controllers\AudioAdminController;
use App\Http\Controllers\TestregistController;
//use App\Http\Controllers\SocialShareButtonsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//tampilan
Route::get('/', [artikelController::class, 'beranda'])->name('dashboard');

// tentang
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/bidang', [TentangController::class, 'bidang']);
Route::get('/kampungkeren', [TentangController::class, 'kampungkeren']);
Route::get('/pokmas', [TentangController::class, 'pokmas']);

// data
Route::get('/grafik', [DataController::class, 'grafik']);
Route::get('/banksampah', [DataController::class, 'banksampah']);
Route::get('/peta', [DataController::class, 'peta']);

// informasi
Route::resource('informasi', InformasiController::class);
// media
Route::resource('media', MediaController::class);
// kritik
Route::resource('kritik', KritikController::class);

//audio
Route::resource('audio', AudioController::class);
// Route::get('/audio', [AudioController::class, 'index']);

//video
Route::resource('video', VideoController::class);

//foto
Route::resource('foto', FotoController::class);

//tulis Cerita
Route::resource('tuliscerita', TulisCeritaController::class);


//login & profil
Route::get('/loginuser', [AuthController::class, 'index'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post('/postregist', [AuthController::class, 'postregist'])
->name('auth.store');
Route::resource('profil', EditprofilController::class);
Route::post('/test123', [TestregistController::class, 'store']);


Route::group(['middleware' => 'auth'], function(){ //agar tidak dapat tampil menggunakan linknya
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profil/{id}/edit', [ProfilController::class, 'index']);

    //artikel admin
    Route::get('/admin/add-article', [ArticleController::class, 'create']);
    Route::post('/admin/list-article', [ArticleController::class, 'store']);
    Route::get('/admin/list-article', [ArticleController::class, 'index']);
    Route::get('/admin/article/{article_id}', [ArticleController::class, 'edit']);
    Route::put('/admin/article/{article_id}', [ArticleController::class, 'update']);
    Route::delete('/admin/article/{article_id}', [ArticleController::class, 'destroy']);
    Route::post('/admin/status', [ArticleController::class, 'status']);

    //foto
    Route::get('/admin/add-foto', [FotoAdminController::class, 'create']);
    Route::post('/admin/list-foto', [FotoAdminController::class, 'store']);
    Route::get('/admin/list-foto', [FotoAdminController::class, 'index']);
    Route::get('/admin/foto/{foto_id}', [FotoAdminController::class, 'edit']);
    Route::put('/admin/foto/{foto_id}', [FotoAdminController::class, 'update']);
    Route::delete('/admin/foto/{foto_id}', [FotoAdminController::class, 'destroy']);

    //video
    Route::get('/admin/add-video', [VideoAdminController::class, 'create']);
    Route::post('/admin/list-video', [VideoAdminController::class, 'store']);
    Route::get('/admin/list-video', [VideoAdminController::class, 'index']);
    Route::get('/admin/video/{video_id}', [VideoAdminController::class, 'edit']);
    Route::put('/admin/video/{video_id}', [VideoAdminController::class, 'update']);
    Route::delete('/admin/video/{video_id}', [VideoAdminController::class, 'destroy']);

    //audio
    Route::get('/admin/add-audio', [AudioAdminController::class, 'create']);
    Route::post('/admin/list-audio', [AudioAdminController::class, 'store']);
    Route::get('/admin/list-audio', [AudioAdminController::class, 'index']);
    Route::get('/admin/audio/{audio_id}', [AudioAdminController::class, 'edit']);
    Route::put('/admin/audio/{audio_id}', [AudioAdminController::class, 'update']);
    Route::delete('/admin/audio/{audio_id}', [AudioAdminController::class, 'destroy']);

});

//berlangganan
Route::get('beranda.index', [NewsletterController::class, 'create']);
Route::post('beranda.index', [NewsletterController::class, 'store']);

//artikel
Route::resource('artikel', artikelController::class);
Route::get('/artikel/{id}', [artikelController::class, 'show']);
//Route::post('add_prosess', 'artikelController@add_process');

//kritik saran
Route::get('kritik.index', [App\Http\Controllers\KritikController::class, 'kritik'])->name('kritik');
Route::post('kritik-saran', [App\Http\Controllers\KritikController::class, 'storeContactForm'])->name('contact-form.store');

//Authentication
Route::get('admin', [CustomAuthController::class, 'admin']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



//admin
// Route::resource('admin', AdminController::class);
