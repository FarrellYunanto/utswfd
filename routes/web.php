<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaloController;
use App\Models\pelanggan;
use App\Models\pembelian;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/index/{param1}/{param2}/{param3?}', [HaloController::class, 'index'])->name('halo.index');

Route::get('/pelanggan', function(){
    return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get(), 'pembelian'=>Pembelian::with(['pelanggan'])->get()]);
})->name('pelanggan');

Route::get('/pembelian', function(){
    return view('pelanggan', ['pelanggan'=>Pelanggan::with(['pembelian'])->get()]);
});


// Route::get("/pelanggan/create", function(){
//     return view('pelanggan.create');
// })->name('pelanggan.create');

Route::get("/pelanggan/create", 
[pelangganController::class, 'create'])->name('pelanggan.create');

Route::post("/pelanggan/insert",
    [pelangganController::class, 'insert'])->name('pelanggan.insert');


// Route::get('/helo', function(){
//     return 'Hello World!';
// });

Route::get('/heloo', function(){return view('profil');});

Route::get('/eric/{var1?}', function(){
    return view('blade');
})->name('erico');



