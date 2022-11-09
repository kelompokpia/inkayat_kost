<?php

// use App\Models\Post;
use App\Models\Kamar;
use App\Http\Controllers\Controller;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[App\Http\Controllers\login::class,'index']);
Route::post('/Admin/dasbord',[App\Http\Controllers\login::class,'login']);

Route::resource('index', App\Http\Controllers\kostController::class);

