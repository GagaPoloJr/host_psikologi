<?php

use Illuminate\Support\Facades\Route;

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
//     return view('main/landing_page');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('main.landing_page');
Route::get('/detail_post/{id}/{slug}',[App\Http\Controllers\MainController::class,'detail_post'])->name('main.detail_page');
Route::get('/dokumen', [App\Http\Controllers\MainController::class, 'dokumen'])->name('main.database');
Route::get('/artikel', [App\Http\Controllers\MainController::class, 'artikel'])->name('main.artikel');
Route::get('/artikel/{slug}', [App\Http\Controllers\MainController::class, 'kategori'])->name('main.kategori_artikel');

Route::get('/post-informasi', [App\Http\Controllers\MainController::class, 'informasi'])->name('main.informasi');
Route::get('/post-informasi/{slug}', [App\Http\Controllers\MainController::class, 'kategori'])->name('main.kategori_artikel');
Route::get('/post-/detail_informasi/{id}/{slug}',[App\Http\Controllers\MainController::class,'detail_informasi'])->name('main.detail_informasi');


Route::get('posts/ajax/{id}',[App\Http\Controllers\PostController::class,'myformAjax'])->name('posts.fields');


Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('kategori', App\Http\Controllers\KategoriPostController::class);
Route::resource('informasi', App\Http\Controllers\InformasiController::class);
Route::resource('kategori_informasi', App\Http\Controllers\KategoriInfoController::class);
Route::resource('file', App\Http\Controllers\FileController::class);
Route::resource('pesan', App\Http\Controllers\PesanController::class)->except([
     'store',   'edit', 'create', 'show'
]);

Route::get('/pesan/{id}/balas_pesan',  [App\Http\Controllers\PesanController::class, 'edit'])->name('pesan.edit');

Route::post('/kirim_email', [App\Http\Controllers\PesanController::class, 'kirim']);


Route::get('/contact', [App\Http\Controllers\MainController::class, 'createForm']);

Route::post('/contact', [App\Http\Controllers\MainController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/visimisi', function () {
    return view('main/visimisi');
});

Route::get('/pengurusharian', function () {
    return view('struktur/pengurusharian');
});

Route::get('/100harikerja', function () {
    return view('main/100harikerja');
});



// Route::get('/kategori', [App\Http\Controllers\PostController::class, 'kategori'])->name('posts.kategori');
// Route::get('/kategori/create_kategori', [App\Http\Controllers\PostController::class, 'create_kategori'])->name('posts.create_kategori');
// Route::post('/kategori', [App\Http\Controllers\PostController::class, 'store_kategori'])->name('posts.store_kategori');

