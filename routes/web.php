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
use App\Http\Controllers\Auth;
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


Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/siswapres',[AdminController::class, 'siswapres'])->name('siswapres');




Route::get('/sija',[LandingController::class, 'sija'])->name('sija');
Route::get('/detail/{id}',[LandingController::class, 'detail'])->name('detail');
Route::get('/sejarah',[LandingController::class, 'sejarah'])->name('sejarah');
Route::get('/galerry',[LandingController::class, 'galerry'])->name('galerry');
Route::get('/kontak',[LandingController::class, 'kontak'])->name('kontak');
Route::get('/profile',[LandingController::class, 'profile'])->name('profile');
Route::get('/visi',[LandingController::class, 'visi'])->name('visi');
Route::get('/dataguru',[LandingController::class, 'dataguru'])->name('dataguru');
Route::get('/blog',[LandingController::class, 'blog'])->name('blog');
Route::get('/events',[LandingController::class, 'events'])->name('events');
Route::get('/detailevents/{id',[LandingController::class, 'detailevents'])->name('detailevents');
Route::get('/echo',[LandingController::class, 'echo'])->name('echo');
Route::get('/blogdetail',[LandingController::class, 'blogdetail'])->name('blogdetail');
Route::get('/extrakulikuler',[LandingController::class, 'extrakulikuler'])->name('extrakulikuler');
Route::get('/axio',[LandingController::class, 'axio'])->name('axio');
Route::get('/silaras',[LandingController::class, 'silaras'])->name('silaras');
Route::get('/beasiswa',[LandingController::class, 'beasiswa'])->name('beasiswa');
Route::get('/bkk',[LandingController::class, 'bkk'])->name('bkk');
Route::get('/bkkdetail/{id}',[LandingController::class, 'bkkdetail'])->name('bkkdetail');
Route::get('/programkeahlian',[LandingController::class, 'programkeahlian'])->name('programkeahlian');




Route::group(['middleware'],function (){

//Profile Sekolah Admin
Route::get('/identitas',[ProfileController::class, 'identitas'])->name('identitas')->middleware('auth');
Route::post('/store',[ProfileController::class, 'store'])->name('store');
Route::post('/updateprofile',[ProfileController::class, 'updateprofile'])->name('updateprofile');

Route::get('/blogindex',[ProfileController::class, 'blogindex'])->name('blogindex')->middleware('auth');
Route::get('/blogcreate',[ProfileController::class, 'blogcreate'])->name('blogcreate');
Route::post('/blogstore',[ProfileController::class, 'blogstore'])->name('blogstore');
Route::get('/blogedit/{id}',[ProfileController::class, 'blogedit'])->name('blogedit');
Route::post('/blogupdate/{id}',[ProfileController::class, 'blogupdate'])->name('blogupdate');
Route::get('/deleteblog/{id}',[ProfileController::class, 'deleteblog'])->name('deleteblog');

Route::get('/kategoriindex',[ProfileController::class, 'kategoriindex'])->name('kategoriindex')->middleware('auth');
Route::get('/kategoricreate',[ProfileController::class, 'kategoricreate'])->name('kategoricreate');
Route::post('/kategoristore',[ProfileController::class, 'kategoristore'])->name('kategoristore');
Route::get('/kategoriedit/{id}',[ProfileController::class, 'kategoriedit'])->name('kategoriedit');
Route::post('/kategoriupdate/{id}',[ProfileController::class, 'kategoriupdate'])->name('kategoriupdate');
Route::post('/deletekategori/{id}',[ProfileController::class, 'deletekategori'])->name('deletekategori');

Route::get('/eventindex', [ProfileController::class, 'index'])->name('eventindex')->middleware('auth');
Route::get('/eventscreate', [ProfileController::class, 'create'])->name('eventscreate');
Route::post('/eventstore',[ProfileController::class, 'eventstore'])->name('eventstore');
Route::get('/eventedit/{id}',[ProfileController::class, 'eventedit'])->name('eventedit');
Route::post('/eventupdate/{id}',[ProfileController::class, 'eventupdate'])->name('eventupdate');
Route::get('/deleteevent/{id}',[ProfileController::class, 'deleteevent'])->name('deleteevent');


Route::get('/smbtnguruindex',[ProfileController::class, 'smbtnguruindex'])->name('smbtnguruindex')->middleware('auth');
Route::post('/smbtngurustore',[ProfileController::class, 'smbtngurustore'])->name('smbtngurustore');
Route::post('/smbtnguruupdate',[ProfileController::class, 'smbtnguruupdate'])->name('smbtnguruupdate');

Route::get('/smbtnindex',[ProfileController::class, 'smbtnindex'])->name('smbtnindex')->middleware('auth');
Route::post('/smbtnstore',[ProfileController::class, 'smbtnstore'])->name('smbtnstore');
Route::post('/smbtnupdate',[ProfileController::class, 'smbtnupdate'])->name('smbtnupdate');

Route::get('/echoindex',[ProfileController::class, 'echoindex'])->name('echoindex')->middleware('auth');
Route::post('/echostore',[ProfileController::class, 'echostore'])->name('echostore');
Route::post('/echoupdate',[ProfileController::class, 'echoupdate'])->name('echoupdate');

Route::get('/aboutindex',[ProfileController::class, 'aboutindex'])->name('aboutindex')->middleware('auth');
Route::post('/aboutstore',[ProfileController::class, 'aboutstore'])->name('aboutstore');
Route::get('/aboutedit/{id}',[ProfileController::class, 'aboutedit'])->name('aboutedit');
Route::post('/aboutupdate/{id}',[ProfileController::class, 'aboutupdate'])->name('aboutupdate');

Route::get('/visiindex',[VisiController::class, 'visiindex'])->name('visiindex')->middleware('auth');
Route::post('visistore',[VisiController::class, 'visistore']);
Route::post('visiupdate',[VisiController::class, 'visiupdate']);

Route::get('/patnerindex',[VisiController::class, 'patnerindex'])->name('patnerindex')->middleware('auth');
Route::get('/patnercreate',[VisiController::class, 'patnercreate'])->name('patnercreate');
Route::post('/patnerstore',[VisiController::class, 'patnerstore'])->name('patnerstore');
Route::get('/patneredit/{id}',[VisiController::class, 'patneredit'])->name('patneredit');
Route::post('/patnerupdate/{id}',[VisiController::class, 'patnerupdate'])->name('patnerupdate');
Route::get('/deletepatner/{id}',[VisiController::class, 'deletepatner'])->name('deletepatner');

Route::get('/videoindex',[VisiController::class, 'videoindex'])->name('videoindex')->middleware('auth');
Route::get('/videocreate',[VisiController::class, 'videocreate'])->name('videocreate');
Route::post('/videostore',[VisiController::class, 'videostore'])->name('videostore');
Route::get('/videoedit/{id}',[VisiController::class, 'videoedit'])->name('videoedit');
Route::post('/videoupdate/{id}',[VisiController::class, 'videoupdate'])->name('videoupdate');


Route::get('/bkkindex',[SejarahController::class, 'bkkindex'])->name('bkkindex')->middleware('auth');
Route::get('/bkkcreate',[SejarahController::class, 'bkkcreate'])->name('bkkcreate');
Route::post('/bkkstore',[SejarahController::class, 'bkkstore'])->name('bkkstore');
Route::get('/bkkedit/{id}',[SejarahController::class, 'bkkedit'])->name('bkkedit');
Route::post('/bkkupdate/{id}',[SejarahController::class, 'bkkupdate'])->name('bkkupdate');
Route::get('/deletebkk/{id}',[SejarahController::class, 'bkkhapus'])->name('bkkhapus');

Route::get('/beasiswaindex',[SejarahController::class, 'beasiswaindex'])->name('beasiswaindex')->middleware('auth');
Route::post('/beasiswastore',[SejarahController::class, 'beasiswastore'])->name('beasiswastore');
Route::post('/beasiswaupdate',[SejarahController::class, 'beasiswaupdate'])->name('beasiswaupdate');

Route::get('/axioindex',[SejarahController::class, 'axioindex'])->name('axioindex')->middleware('auth');
Route::post('/axiostore',[SejarahController::class, 'axiostore'])->name('axiostore');
Route::post('/axioupdate',[SejarahController::class, 'axioupdate'])->name('axioupdate');

Route::get('/silarasindex',[SejarahController::class, 'silarasindex'])->name('silarasindex')->middleware('auth');
Route::post('/silarasstore',[SejarahController::class, 'silarasstore'])->name('silarasstore');
Route::post('/silarasupdate',[SejarahController::class, 'silarasupdate'])->name('silarasupdate');

Route::get('/sejarahindex',[SejarahController::class, 'sejarahindex'])->name('sejarahindex')->middleware('auth');
// Route::get('/sejarahcreate',[SejarahController::class, 'sejarahcreate'])->name('sejarahcreate');
Route::post('/sejarahstore',[SejarahController::class, 'sejarahstore'])->name('sejarahstore');
// Route::get('/sejarahedit/{id}',[SejarahController::class, 'sejarahedit']);
Route::post('/updatesjr',[SejarahController::class, 'updatesjr'])->name('updatesjr');

Route::get('/jurusanindex',[JurusanController::class, 'jurusanindex'])->name('jurusanindex')->middleware('auth');
Route::get('/jurusancreate',[JurusanController::class, 'jurusancreate'])->name('jurusancreate');
Route::post('/jurusanstore',[JurusanController::class, 'jurusanstore'])->name('jurusanstore');
Route::get('/jurusanedit/{id}',[JurusanController::class, 'jurusanedit'])->name('jurusanedit');
Route::post('/jurusanupdate/{id}',[JurusanController::class, 'jurusanupdate'])->name('jurusanupdate');
Route::get('/deletejurusan/{id}',[JurusanController::class, 'destroy'])->name('destroy');

Route::get('/kajurindex',[JurusanController::class, 'kajurindex'])->name('kajurindex')->middleware('auth');
Route::get('/kajurcreate',[JurusanController::class, 'kajurcreate'])->name('kajurcreate');
Route::post('/kajurstore',[JurusanController::class, 'kajurstore'])->name('kajurstore');
Route::get('/kajuredit/{id}',[JurusanController::class, 'kajuredit'])->name('kajuredit');
Route::post('/kajurupdate/{id}',[JurusanController::class, 'kajurupdate'])->name('kajurupdate');
Route::get('/deletekajur/{id}',[JurusanController::class, 'deletekajur'])->name('deletekajur');

Route::get('/guruindex',[GuruController::class, 'guruindex'])->name('guruindex')->middleware('auth');
Route::get('/gurucreate',[GuruController::class, 'gurucreate'])->name('gurucreate');
Route::post('/gurustore',[GuruController::class, 'gurustore'])->name('gurustore');
Route::get('/guruedit/{id}',[GuruController::class, 'guruedit'])->name('guruedit');
Route::post('/guruupdate/{id}',[GuruController::class, 'guruupdate'])->name('guruupdate');
Route::get('/deleteguru/{id}',[GuruController::class, 'destroy'])->name('destroy');

Route::get('/galeryindex',[GaleryController::class, 'galeryindex'])->name('galeryindex')->middleware('auth');
Route::get('/galerycreate',[GaleryController::class, 'galerycreate'])->name('galerycreate');
Route::post('/galerystore',[GaleryController::class, 'galerystore'])->name('galerystore');
Route::get('/galerydelete/{id}',[GaleryController::class, 'deletegaleri'])->name('deletegaleri');

Route::get('/galeriaxioindex',[GaleryController::class, 'galeriaxioindex'])->name('galeriaxioindex')->middleware('auth');
Route::get('/galeriaxiocreate',[GaleryController::class, 'galeriaxiocreate'])->name('galeriaxiocreate');
Route::post('/galeriaxiostore',[GaleryController::class, 'galeriaxiostore'])->name('galeriaxiostore');
Route::get('/galeriaxioedit/{id}',[GaleryController::class, 'galeriaxioedit'])->name('galeriaxioedit');
Route::post('/galeriaxioupdate/{id}',[GaleryController::class, 'galeriaxioupdate'])->name('galeriaxioupdate');
Route::get('/deletegaleriaxio/{id}',[GaleryController::class, 'destroy'])->name('destroy');

Route::get('/galeriechoindex',[GaleryController::class, 'galeriechoindex'])->name('galeriechoindex')->middleware('auth');
Route::get('/galeriechocreate',[GaleryController::class, 'galeriechocreate'])->name('galeriechocreate');
Route::post('/galeriechostore',[GaleryController::class, 'galeriechostore'])->name('galeriechostore');
Route::get('/galeriechoedit/{id}',[GaleryController::class, 'galeriechoedit'])->name('galeriechoedit');
Route::post('/galeriechoupdate/{id}',[GaleryController::class, 'galeriechoupdate'])->name('galeriechoupdate');
Route::get('/deletegaleriecho/{id}',[GaleryController::class, 'destroy'])->name('destroy');

Route::get('/extraindex',[ExtraController::class, 'extraindex'])->name('extraindex')->middleware('auth');
Route::get('/extracreate',[ExtraController::class, 'extracreate'])->name('extracreate');
Route::post('/extrastore',[ExtraController::class, 'extrastore'])->name('extrastore');
Route::get('/extraedit/{id}',[ExtraController::class, 'extraedit'])->name('extraedit');
Route::post('/extraupdate/{id}',[ExtraController::class, 'extraupdate'])->name('extraupdate');
Route::get('/deleteextra/{id}',[ExtraController::class, 'destroy'])->name('destroy');

Route::get('/slider',[ProfileController::class, 'slider'])->name('slider')->middleware('auth');
Route::get('/slidercreate',[ProfileController::class, 'slidercreate'])->name('slidercreate');
Route::post('/sliderstore',[ProfileController::class, 'sliderstore'])->name('sliderstore');
Route::get('/slideredit/{id}',[ProfileController::class, 'slideredit'])->name('slideredit');
Route::post('/sliderupdate/{id}',[ProfileController::class, 'sliderupdate'])->name('sliderupdate');
Route::get('/deleteslider/{id}',[ProfileController::class, 'destroy'])->name('destroy');

});