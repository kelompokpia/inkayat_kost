<?php

// use App\Models\Post;
use App\Models\Kamar;
use App\Http\Controllers\login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\kostController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/login', [App\Http\Controllers\login::class, 'index']);
Route::post('/Admin/dasbord', [App\Http\Controllers\login::class, 'login']);

Route::resource('/', App\Http\Controllers\kostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pembayaran', [PembayaranController::class, 'show'])->name('Pembayaran');