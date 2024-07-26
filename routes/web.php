<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('frontend.00_full.index');
});

Route::get('/404', function () {
    // return view('welcome');
    return view('404');
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});

// ---------------------- 01 PROFIL-----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/profil/struktur', function () {
    // return view('welcome');
    return view('frontend.01_profil.01_struktur');
});

Route::get('/profil/rencanastrategis', function () {
    // return view('welcome');
    return view('frontend.01_profil.02_rencanastrategis');
});

Route::get('/profil/tupoksi', function () {
    // return view('welcome');
    return view('frontend.01_profil.03_tupoksi');
});

// ---------------------- 03 DATA JAKON -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/datajakon/standarbiayaumum', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.02_standarbiayaumum');
});

Route::get('/datajakon/paketpekerjaan', function () {
    // return view('welcome');
    return view('frontend.03_datajakon.03_paketpekerjaan');
});


// ---------------------- 04 TENAGA KERJA -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tenagakerja/skaskt', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.01_skaskt');
});

Route::get('/tenagakerja/pjt', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.02_pjt');
});

Route::get('/tenagakerja/timpembina', function () {
    // return view('welcome');
    return view('frontend.04_tenagakerja.03_timpembina');
});


// ---------------------- 05 INFORMASI SPM -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/spm/informasispm', function () {
    // return view('welcome');
    return view('frontend.05_spm.01_informasispm');
});

// ---------------------- 08 UIJK -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/uijk', function () {
    // return view('welcome');
    return view('frontend.08_uijk.uijk');
});

// ---------------------- 09 TDUP -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/tdup', function () {
    // return view('welcome');
    return view('frontend.09_tdup.01_tdup');
});

// ---------------------- 11 PERATURAN PERATURAN -----------------------//
// -------- BAGIAN 1 ---------------------------------
Route::get('/peraturan/undangundang', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.01_undangundang');
});
// -------- BAGIAN 2 ---------------------------------
Route::get('/peraturan/pemerintah', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.02_peraturanpemerintah');
});
// -------- BAGIAN 3 ---------------------------------
Route::get('/peraturan/presiden', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.03_peraturanpresiden');
});
// -------- BAGIAN 4 ---------------------------------
Route::get('/peraturan/menteri', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.04_peraturanmenteri');
});
// -------- BAGIAN 5 ---------------------------------
Route::get('/peraturan/keputusanmenteri', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.05_keputusanmenteri');
});
// -------- BAGIAN 6 ---------------------------------
Route::get('/peraturan/suratedaranmenteri', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.06_suratedaranmenteri');
});
// -------- BAGIAN 7 ---------------------------------
Route::get('/peraturan/referensi', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.07_referensi');
});
// -------- BAGIAN 8 ---------------------------------
Route::get('/peraturan/daerah', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.08_peraturandaerah');
});
// -------- BAGIAN 9 ---------------------------------
Route::get('/peraturan/gubernur', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.09_peraturangubernur');
});
// -------- BAGIAN 10 ---------------------------------
Route::get('/peraturan/walikota', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.10_peraturanwalikota');
});
// -------- BAGIAN 11 ---------------------------------
Route::get('/peraturan/suratkeputusan', function () {
    // return view('welcome');
    return view('frontend.11_peraturan.11_suratkeputusan');
});


// ================================================================================================================================================
// ================================================================================================================================================
// ================================================================================================================================================

Route::get('/dashboard', function () {
    // return view('welcome');
    return view('backend.00_dashboard.index',[
        'title' => 'Admin Dashboard Sipjaki KBB'
    ]);
})->middleware('auth');

// -------- BAGIAN 11 ---------------------------------
Route::get('/beskktenagakerja', function () {
    // return view('welcome');
    return view('backend.04_skk.01_skk.index', [
        'title' => 'SKK Tenaga Kerja'
    ]);
})->middleware('auth');



// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',[
//         'title' => 'Halaman Login'
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');  
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
