<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Kas_Masjid\RekapController;
use App\Http\Controllers\Admin\Kas_Masjid\PemasukanController;
use App\Http\Controllers\Admin\Laporan\LapkasmasjidController;
use App\Http\Controllers\Admin\Admin_Users\AdminusersController;
use App\Http\Controllers\Admin\Kas_Masjid\PengeluaranController;

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


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Admin
Route::get('/login-admin', [LoginController::class,'index']);
Route::get('/lupa-password', function () {
    return view('admin.konfirmasi.LupaPassword');
});
//with Controllers
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('admin');
    //Admin Users
    // Route::get('/admin-users', [AdminusersController::class,'index']);
    // Route::get('/admin-users/create', [AdminusersController::class,'create']);
    // Route::get('/admin-users/add', [AdminusersController::class,'store']);
    // Route::get('/admin-users/edit', [AdminusersController::class,'edit']);
    // Route::get('/admin-users/edit/{id}', [AdminusersController::class,'update']);
    // Route::get('/admin-users/hapus/{id}', [AdminusersController::class,'destroy']);
    Route::resource('/users', AdminusersController::class)->middleware('admin:admin');



    Route::get('/kas-masjid/pemasukan', [PemasukanController::class, 'index'])->middleware('admin:admin|bendahara');
    Route::get('/kas-masjid/pengeluaran', [PengeluaranController::class, 'index'])->middleware('admin:admin|bendahara');
    Route::get('/kas-masjid/rekap', [RekapController::class, 'index']);

    //AJAX JSON
    //Pemasukan
    Route::get('/data-pemasukan', [PemasukanController::class, 'datapemasukan']);
    Route::post('/data-pemasukan/add', [PemasukanController::class, 'store']);
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
    Route::get('/data-rekap', [RekapController::class, 'datarekap']);

    // Laporan Kas Masjid
    Route::get('/laporan/kas-masjid', [LapkasmasjidController::class, 'index']);
    Route::get('/download-pdf', [LapkasmasjidController::class, 'DownloadSemuapdf']);
    Route::get('/download-pdf-periode', [LapkasmasjidController::class, 'DownloadPeriode'])->name('download-pdf-periode');
});


Route::get('/', function () {
    return view('layouts.web');
});

// require __DIR__ . '/auth.php';



