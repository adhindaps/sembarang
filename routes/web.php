<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ExtraController;
use App\Models\Guru;
use App\Models\Sejarah;

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


Route::get('/', [LandingController::class, 'index'])->name('index');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/siswapres',[AdminController::class, 'siswapres'])->name('siswapres');




Route::get('/sija',[LandingController::class, 'sija'])->name('sija');
Route::get('/tb',[LandingController::class, 'tb'])->name('tb');

Route::get('/sejarah',[LandingController::class, 'sejarah'])->name('sejarah');
Route::get('/galerry',[LandingController::class, 'galerry'])->name('galerry');
Route::get('/kontak',[LandingController::class, 'kontak'])->name('kontak');
Route::get('/profile',[LandingController::class, 'profile'])->name('profile');
Route::get('/visi',[LandingController::class, 'visi'])->name('visi');
Route::get('/dataguru',[LandingController::class, 'dataguru'])->name('dataguru');
Route::get('/blog',[LandingController::class, 'blog'])->name('blog');
Route::get('/events',[LandingController::class, 'events'])->name('events');
Route::get('/detailevents',[LandingController::class, 'detailevents'])->name('detailevents');
Route::get('/echo',[LandingController::class, 'echo'])->name('echo');
Route::get('/blogdetail',[LandingController::class, 'blogdetail'])->name('blogdetail');
Route::get('/extrakulikuler',[LandingController::class, 'extrakulikuler'])->name('extrakulikuler');
Route::get('/axio',[LandingController::class, 'axio'])->name('axio');
Route::get('/silaras',[LandingController::class, 'silaras'])->name('silaras');
Route::get('/beasiswa',[LandingController::class, 'beasiswa'])->name('beasiswa');
Route::get('/bkk',[LandingController::class, 'bkk'])->name('bkk');
Route::get('/bkkdetail',[LandingController::class, 'bkkdetail'])->name('bkkdetail');
Route::get('/programkeahlian',[LandingController::class, 'programkeahlian'])->name('programkeahlian');






//Profile Sekolah Admin
Route::get('/identitas',[ProfileController::class, 'identitas'])->name('identitas');
Route::post('/store',[ProfileController::class, 'store'])->name('store');
Route::post('/updateprofile',[ProfileController::class, 'updateprofile'])->name('updateprofile');

Route::get('/blogindex',[ProfileController::class, 'blogindex'])->name('blogindex');
Route::get('/blogcreate',[ProfileController::class, 'blogcreate'])->name('blogcreate');
Route::post('/blogstore',[ProfileController::class, 'blogstore'])->name('blogstore');
Route::get('/blogedit/{id}',[ProfileController::class, 'blogedit'])->name('blogedit');
Route::post('/blogupdate/{id}',[ProfileController::class, 'blogupdate'])->name('blogupdate');
Route::post('/deleteblog/{id}',[ProfileController::class, 'deleteblog'])->name('deleteblog');

Route::get('/eventindex', [ProfileController::class, 'index'])->name('eventindex');
Route::get('/tambahevent', [ProfileController::class, 'create'])->name('tambahevent');
Route::post('/insertevent', [ProfileController::class, 'store'])->name('insertevent');
Route::get('/tampilevent/{id}', [ProfileController::class, 'tampilevent'])->name('tampilevent');
Route::post('/updateevent/{id}', [ProfileController::class, 'updateevent'])->name('updateevent');
Route::get('/deleteevent/{id}', [ProfileController::class, 'destroy'])->name('deleteevent');

Route::get('/smbtnindex',[ProfileController::class, 'smbtnindex'])->name('smbtnindex');
Route::post('/smbtnstore',[ProfileController::class, 'smbtnstore'])->name('smbtnstore');
Route::post('/smbtnupdate',[ProfileController::class, 'smbtnupdate'])->name('smbtnupdate');

Route::get('/echoindex',[ProfileController::class, 'echoindex'])->name('echoindex');
Route::post('/echostore',[ProfileController::class, 'echostore'])->name('echostore');
Route::post('/echoupdate',[ProfileController::class, 'echoupdate'])->name('echoupdate');

Route::get('/visiindex',[VisiController::class, 'visiindex'])->name('visiindex');
Route::post('visistore',[VisiController::class, 'visistore']);
Route::post('visiupdate',[VisiController::class, 'visiupdate']);

Route::get('/bkkindex',[SejarahController::class, 'bkkindex'])->name('bkkindex');
Route::get('/bkkcreate',[SejarahController::class, 'bkkcreate'])->name('bkkcreate');
Route::post('/bkkstore',[SejarahController::class, 'bkkstore'])->name('bkkstore');
Route::get('/bkkedit/{id}',[SejarahController::class, 'bkkedit'])->name('bkkedit');
Route::post('/bkkupdate/{id}',[SejarahController::class, 'bkkupdate'])->name('bkkupdate');
Route::get('/bkkhapus',[SejarahController::class, 'bkkhapus'])->name('bkkhapus');

Route::get('/beasiswaindex',[SejarahController::class, 'beasiswaindex'])->name('beasiswaindex');
Route::post('/beasiswastore',[SejarahController::class, 'beasiswastore'])->name('beasiswastore');
Route::post('/beasiswaupdate',[SejarahController::class, 'beasiswaupdate'])->name('beasiswaupdate');

Route::get('/axioindex',[SejarahController::class, 'axioindex'])->name('axioindex');
Route::post('/axiostore',[SejarahController::class, 'axiostore'])->name('axiostore');
Route::post('/axioupdate',[SejarahController::class, 'axioupdate'])->name('axioupdate');

Route::get('/silarasindex',[SejarahController::class, 'silarasindex'])->name('silarasindex');
Route::post('/silarasstore',[SejarahController::class, 'silarasstore'])->name('silarasstore');
Route::post('/silarasupdate',[SejarahController::class, 'silarasupdate'])->name('silarasupdate');

Route::get('/sejarahindex',[SejarahController::class, 'sejarahindex'])->name('sejarahindex');
// Route::get('/sejarahcreate',[SejarahController::class, 'sejarahcreate'])->name('sejarahcreate');
Route::post('/sejarahstore',[SejarahController::class, 'sejarahstore'])->name('sejarahstore');
// Route::get('/sejarahedit/{id}',[SejarahController::class, 'sejarahedit']);
Route::post('/updatesjr',[SejarahController::class, 'updatesjr'])->name('updatesjr');

Route::get('/jurusanindex',[JurusanController::class, 'jurusanindex'])->name('jurusanindex');
Route::get('/jurusancreate',[JurusanController::class, 'jurusancreate'])->name('jurusancreate');
Route::post('/jurusanstore',[JurusanController::class, 'jurusanstore'])->name('jurusanstore');
Route::get('/jurusanedit/{id}',[JurusanController::class, 'jurusanedit'])->name('jurusanedit');
Route::post('/jurusanupdate/{id}',[JurusanController::class, 'jurusanupdate'])->name('jurusanupdate');
Route::get('/jurusandelete/{id}',[JurusanController::class, 'destroy'])->name('destroy');

Route::get('/guruindex',[GuruController::class, 'guruindex'])->name('guruindex');
Route::get('/gurucreate',[GuruController::class, 'gurucreate'])->name('gurucreate');
Route::post('/gurustore',[GuruController::class, 'gurustore'])->name('gurustore');
Route::get('/guruedit/{id}',[GuruController::class, 'guruedit'])->name('guruedit');
Route::post('/guruupdate/{id}',[GuruController::class, 'guruupdate'])->name('guruupdate');
// Route::get('/deleteguru/{id}',[GuruController::class, 'deleteguru']);
Route::get('/deleteguru/{id}',[GuruController::class, 'destroy'])->name('destroy');

Route::get('/galeryindex',[GaleryController::class, 'galeryindex'])->name('galeryindex');
Route::get('/galerycreate',[GaleryController::class, 'galerycreate'])->name('galerycreate');
Route::post('/galerystore',[GaleryController::class, 'galerystore'])->name('galerystore');
Route::post('/galerydelete/{id}',[GaleryController::class, 'deletegaleri'])->name('deletegaleri');


Route::get('/extraindex',[ExtraController::class, 'extraindex'])->name('extraindex');
Route::get('/extracreate',[ExtraController::class, 'extracreate'])->name('extracreate');
Route::post('/extrastore',[ExtraController::class, 'extrastore'])->name('extrastore');
Route::get('/extraedit/{id}',[ExtraController::class, 'extraedit'])->name('extraedit');
Route::post('/extraupdate/{id}',[ExtraController::class, 'extraupdate'])->name('extraupdate');
