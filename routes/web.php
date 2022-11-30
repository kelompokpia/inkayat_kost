<?php

// use App\Models\Post;
use App\Models\Kamar;
use App\Http\Controllers\login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kostController;
// use App\Http\Controllers\kamarController;
// use App\Http\Controllers\pengaturanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\tambahpembayaran;
use Illuminate\Contracts\Session\Session;



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

// Route::get('/', function () {
//     return view('portofolio.index');
// });



Route::resource('/', App\Http\Controllers\kostController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/login', [App\Http\Controllers\login::class, 'index']);
    Route::post('/Admin/dasbord', [App\Http\Controllers\login::class, 'login']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('home/datakamar', [kamarController::class, 'show'])->name('Datakamar');
    Route::get('/home/pembayaran', [PembayaranController::class, 'show'])->name('Pembayaran');
    Route::get('/home/pembayaran/tahun/{tahun:slug}', [PembayaranController::class, 'tahun'])->name('Tahun');
    Route::resource('home/pengaturan', App\Http\Controllers\pengaturanController::class);
    Route::get('/tambah-tahun', [PembayaranController::class, 'tambah_tahun']);
    Route::get('/home/pembayaran/tambah-pembayaran', [PembayaranController::class, 'tambahPembayaran']);
    // Route::resource('/home/pembayaran/{tahun:slug}', PembayaranController::class)->middleware('auth');
    Route::resource('/home/pembayaran', TahunController::class)->middleware('auth');
    Route::get('/edit-pembayaran', [PembayaranController::class, 'edit']);
    Route::resource('datakamar', App\Http\Controllers\controlkamar::class );
    Route::get('/datakamar', [kamarController::class, 'index'])->name('Datakamar');
    Route::post('/datakamar', [kamarController::class, 'index'])->name('Datakamar');
});


Auth::routes();
