<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
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

Route::get('/', function () {
    return view('landingpage.index');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('admin.beranda');
});

Route::get('/siswapres', function () {
    return view('admin.siswapres');
});
Route::get('/bug', function () {
    return view('landingpage.jurusan.bug');
});

Route::get('/anm',[LandingController::class, 'anm'])->name('anm');
Route::get('/aph',[LandingController::class, 'aph'])->name('aph');
Route::get('/mm',[LandingController::class, 'mm'])->name('mm');
Route::get('/rpl',[LandingController::class, 'rpl'])->name('rpl');
Route::get('/sija',[LandingController::class, 'sija'])->name('sija');
Route::get('/tb',[LandingController::class, 'tb'])->name('tb');
Route::get('/tkj',[LandingController::class, 'tkj'])->name('tkj');
Route::get('/sejarah',[LandingController::class, 'sejarah'])->name('sejarah');
Route::get('/galerry',[LandingController::class, 'galerry'])->name('galerry');
Route::get('/kontak',[LandingController::class, 'kontak'])->name('kontak');
Route::get('/profile',[LandingController::class, 'profile'])->name('profile');
Route::get('/visi',[LandingController::class, 'visi'])->name('visi');
<<<<<<< Updated upstream:routes/web.php
Route::get('/dataguru',[LandingController::class, 'dataguru'])->name('dataguru');
Route::get('/blog',[LandingController::class, 'blog'])->name('blog');
Route::get('/events',[LandingController::class, 'events'])->name('events');
Route::get('/detailevents',[LandingController::class, 'detailevents'])->name('detailevents');
=======
Route::get('/echo',[LandingController::class, 'echo'])->name('echo');
Route::get('/blogdetail',[LandingController::class, 'blogdetail'])->name('blogdetail');
>>>>>>> Stashed changes:routes/webs.php
