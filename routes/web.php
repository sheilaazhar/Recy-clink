<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardPenjualanController;
use App\Http\Controllers\DashboardPengumpulanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AmbilSampahController;
use App\Http\Controllers\DashboardController;

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

Route::group(['middleware' =>'revalidate'], function (){
    Route::get('/', function () {
        return view('home', [
            "title" => "Home",
            'active'=> 'home',
        ]);
    });

    Route::get('/about', function () {
        return view('about', [
            "title" => "About",
            'active'=> 'about',
        ]);
    });
    
    Route::get('/help', function () {
        return view('help', [
            "title" => "Help",
            'active'=> 'help',
        ]);
    });
});

Route::group(['middleware' =>['auth','revalidate']], function (){
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::get('/profil/edit', [ProfilController::class, 'edit']);
    Route::post('/profil', [ProfilController::class, 'update']);
    Route::get('/profil/pesanan/{id}', [ProfilController::class, 'detailpesanan']);
    Route::get('/profil/pengumpulan', [ProfilController::class, 'pengumpulan']);

    Route::post('pesan/{id}', [ProdukController::class, 'pesan']);
    Route::get('/keranjang', [ProdukController::class, 'keranjang']);
    Route::delete('/keranjang/{id}', [ProdukController::class, 'delete']);
    Route::get('/checkout', [ProdukController::class, 'checkout']);

    Route::get('/posts', [PostController::class, 'index']);
    
    //Halaman Single Post
    Route::get('posts/{post:slug}', [PostController::class, 'show']);
    
    Route::get('/produk', [ProdukController::class, 'index']);

    Route::get('/sampah', [AmbilSampahController::class, 'index']);
    Route::post('/sampah/pengumpulan', [AmbilSampahController::class, 'store']);
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
    
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
    Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');
    Route::resource('/dashboard/produk', DashboardProdukController::class)->middleware('admin');
    Route::resource('/dashboard/pesanan', DashboardPenjualanController::class)->middleware('admin');
    Route::resource('/dashboard/pengumpulan', DashboardPengumpulanController::class)->middleware('admin');
    Route::get('/dashboard/pesanan/{id}/update', [DashboardPenjualanController::class, 'update'])->middleware('admin');
    Route::get('/dashboard/pengumpulan/{id}/setuju', [DashboardPengumpulanController::class, 'setuju'])->middleware('admin');
    Route::get('/dashboard/pengumpulan/{id}/tolak', [DashboardPengumpulanController::class, 'tolak'])->middleware('admin');
});

    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);