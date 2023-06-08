<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\GuruController; 
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\GuruMiddleware;
use App\Http\Middleware\WalikelasMiddleware;
use App\Http\Middleware\MuridMiddleware;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardMuridController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CrudLoginController;
use App\Http\Controllers\DashboardWalikelasController;
use App\Http\Controllers\DashboardGuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruBKController;
use App\Http\Controllers\WaliKelasController;

// // Rute yang hanya bisa diakses oleh admin
// Route::group(['middleware' => [AdminMiddleware::class]], function () {
//     // Tambahkan rute-rute admin di sini
// });

// // Rute yang hanya bisa diakses oleh guru
// Route::group(['middleware' => [GuruMiddleware::class]], function () {
//     // Tambahkan rute-rute guru di sini
// });

// // Rute yang hanya bisa diakses oleh murid
// Route::group(['middleware' => [MuridMiddleware::class]], function () {
//     // Tambahkan rute-rute murid di sini
// });


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
    return view('welcome',[
        "tittle" => "Konseling"
    ]);
});

Route::get('/account-data', function () {
    return view('admin.account-data',[
        "tittle" => "account data"
    ]);
});

Route::get('/data-siswa', function () {
    return view('data.data-siswa');
});

// Halaman registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

/////////////////////////////////////////////////////////////////////////////////////

// Rute yang hanya bisa diakses oleh admin
Route::group(['middleware' => [AdminMiddleware::class]], function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'admin']);
});

// Rute yang hanya bisa diakses oleh guru
Route::group(['middleware' => [GuruMiddleware::class]], function () {
    Route::get('/guru', [DashboardGuruController::class, 'guru']);
});

Route::group(['middleware' => [WalikelasMiddleware::class]], function () {
    Route::get('/walikelas', [DashboardWalikelasController::class, 'walikelas']);
});

// Rute yang hanya bisa diakses oleh murid
Route::group(['middleware' => [MuridMiddleware::class]], function () {
    Route::get('/murid', [DashboardMuridController::class, 'murid']);
});

//////////////////////////////////////////////////////////////////////////////////////

Route::get('/guru.index', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/{guru}', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/admin/account-data', [CrudLoginController::class, 'admin'])->name('admin.account-data');
Route::resource('user', UserController::class);

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/userss/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usersss/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::resource('users', UserController::class);

Route::get('/user/search', 'UserController@search')->name('user.search');

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{siswa}', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/gurubk', [GuruBKController::class, 'index'])->name('gurubk.index');
Route::get('/gurubk/create', [GuruBKController::class, 'create'])->name('gurubk.create');
Route::post('/gurubk', [GuruBKController::class, 'store'])->name('gurubk.store');
Route::get('/gurubk/{gurubk}', [GuruBKController::class, 'show'])->name('gurubk.show');
Route::get('/gurubk/{gurubk}/edit', [GuruBKController::class, 'edit'])->name('gurubk.edit');
Route::put('/gurubk/{gurubk}', [GuruBKController::class, 'update'])->name('gurubk.update');
Route::delete('/gurubk/{gurubk}', [GuruBKController::class, 'destroy'])->name('gurubk.destroy');

////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/wali-kelas', [WaliKelasController::class, 'index'])->name('waliKelas.index');
Route::get('/wali-kelas/create', [WaliKelasController::class, 'create'])->name('waliKelas.create');
Route::post('/wali-kelas', [WaliKelasController::class, 'store'])->name('waliKelas.store');
Route::get('/wali-kelas/{waliKelas}', [WaliKelasController::class, 'show'])->name('waliKelas.show');
Route::get('/wali-kelas/{waliKelas}/edit', [WaliKelasController::class, 'edit'])->name('waliKelas.edit');
Route::put('/wali-kelas/{waliKelas}', [WaliKelasController::class, 'update'])->name('waliKelas.update');
Route::delete('/wali-kelas/{waliKelas}', [WaliKelasController::class, 'destroy'])->name('waliKelas.destroy');