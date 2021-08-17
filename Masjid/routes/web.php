<?php

use App\Http\Controllers;
use App\Http\Controllers\Admin\Admin_Users\AdminusersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Kas_Masjid\RekapController;
use App\Http\Controllers\Admin\Kas_Masjid\PemasukanController;
use App\Http\Controllers\Admin\Kas_Masjid\PengeluaranController;
use App\Http\Controllers\Admin\Laporan\LapkasmasjidController;

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
// Route::get('/kas-masjid/pengeluaran', function () {
//     return view('admin.Kas_Masjid.pengeluaran');
// });
// Route::get('/kas-masjid/rekap', function () {
//     return view('admin.Kas Masjid.rekap');
// });


//with Controllers
Route::prefix('admin')->group(function () {
Route::get('/',[HomeController::class,'index']);
//Admin Users
// Route::get('/admin-users', [AdminusersController::class,'index']);
// Route::get('/admin-users/create', [AdminusersController::class,'create']);
// Route::get('/admin-users/add', [AdminusersController::class,'store']);
// Route::get('/admin-users/edit', [AdminusersController::class,'edit']);
// Route::get('/admin-users/edit/{id}', [AdminusersController::class,'update']);
// Route::get('/admin-users/hapus/{id}', [AdminusersController::class,'destroy']);

Route::resource('/users', AdminusersController::class);



Route::get('/kas-masjid/pemasukan',[PemasukanController::class,'index']);
Route::get('/kas-masjid/pengeluaran',[PengeluaranController::class,'index']);
Route::get('/kas-masjid/rekap',[RekapController::class,'index']);

//AJAX JSON
//Pemasukan
Route::get('/data-pemasukan',[PemasukanController::class,'datapemasukan']);
Route::post('/data-pemasukan/add',[PemasukanController::class,'store']);
Route::get('/data-pemasukan/edit/{id}', [PemasukanController::class, 'edit']);
Route::put('/data-pemasukan/update/{id}', [PemasukanController::class, 'update']);
Route::delete('/data-pemasukan/delete{id}', [PemasukanController::class, 'destroy']);
//Pengeluaran
Route::get('/data-pengeluaran', [PengeluaranController::class, 'datapengeluaran']);
Route::post('/data-pengeluaran/add', [PengeluaranController::class, 'store']);
Route::get('/data-pengeluaran/edit/{id}', [PengeluaranController::class, 'edit']);
Route::put('/data-pengeluaran/update/{id}', [PengeluaranController::class, 'update']);
Route::delete('/data-pengeluaran/delete/{id}', [PengeluaranController::class, 'destroy']);
// Rekap kas-masjid
Route::get('/data-rekap', [RekapController::class,'datarekap']);

// Laporan Kas Masjid
Route::get('/laporan/kas-masjid',[LapkasmasjidController::class,'index'] );
Route::get('/download-pdf',[LapkasmasjidController::class, 'DownloadSemuapdf'] );
Route::get('/download-pdf-periode',[LapkasmasjidController::class, 'DownloadPeriode'])->name('download-pdf-periode');

});
//download pdf
// Route::get('/download-pdf-KasMasjid', );





// Route::resource('kas-masjid', PemasukanController::class);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('layouts.web');
});

require __DIR__.'/auth.php';
