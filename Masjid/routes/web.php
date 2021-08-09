<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Kas_Masjid\PemasukanController;
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











// Admin


// Route::get('/admin', function () {
//     return view('admin.partials.home',[KasmasjidController::class]);
// });


//without controller
// Route::get('/kas-masjid/pemasukan', function () {
//     return view('admin.Kas Masjid.pemasukan');
// });
Route::get('/kas-masjid/pengeluaran', function () {
    return view('admin.Kas_Masjid.pengeluaran');
});
Route::get('/kas-masjid/rekap', function () {
    return view('admin.Kas Masjid.rekap');
});


//with Controllers

// Route::resource('kas_masjid',KasmasjidController::class);
Route::get('/admin',[HomeController::class,'index']);
Route::get('/kas-masjid/pemasukan',[PemasukanController::class,'index']);
Route::get('/data-pemasukan',[PemasukanController::class,'datapemasukan']);
Route::get('/kas-masjid/pemasukan/edit/{id}', [PemasukanController::class, 'edit']);
// Route::post('/kas-masjid/add',[PemasukanController::class,'store']);

Route::resource('kas-masjid', PemasukanController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('layouts.web');
});

require __DIR__.'/auth.php';
