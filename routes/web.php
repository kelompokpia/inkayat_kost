<?php

// use App\Models\Post;
use App\Models\Kamar;
use App\Http\Controllers\login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kostController;
use App\Http\Controllers\controlkamar;
use App\Http\Controllers\pengaturanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\tambahpembayaran;
use Illuminate\Contracts\Session\Session;
use Spatie\Analytics\Period;


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

// Route::get('/home', function () {
//     $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
//     return view('Admin.dasbord', ['analyticsData' => $analyticsData]);
// });



Route::resource('/index', App\Http\Controllers\kostController::class);
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::post('/Admin/dasbord', [App\Http\Controllers\login::class, 'login']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('home/datakamar', [kamarController::class, 'show'])->name('Datakamar');
    Route::get('/home/pembayaran', [PembayaranController::class, 'show'])->name('Pembayaran');
    Route::get('/home/pembayaran/tahun/{tahun:slug}', [PembayaranController::class, 'tahun'])->name('Tahun');
    Route::resource('home/pengaturan', App\Http\Controllers\pengaturanController::class);
    Route::get('/tambah-tahun', [PembayaranController::class, 'tambah_tahun']);
    Route::get('/home/pembayaran/tambah-pembayaran', [PembayaranController::class, 'tambahPembayaran']);
    // Route::get('/home/pembayaran/tahun', PembayaranController::class);
    Route::resource('/home/pembayaran', PembayaranController::class);
    Route::resource('/home/pembayaran/tambah-tahun', TahunController::class);
    // Route::resource('/home/pembayaran/tahun/{pembayaran:tahun}/tambah', PembayaranController::class);
    Route::get('/home/pembayaran/{pembayaran:id}/edit', [PembayaranController::class, 'edit']);
    Route::resource('/home/datakamar', App\Http\Controllers\controlkamar::class);
});