<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PrestasiController;


// Route::get('/', function () {
//     return view('Home', ['title' => 'Home Page']);
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/Alumni', [AlumniController::class, 'Alumni'])->name('Alumni.Alumni');
Route::post('/tambah_alumni', [AlumniController::class, 'Tambah']);
Route::delete('/hapus_alumni/{id}', [AlumniController::class, 'hapus'])->name('Alumni.hapus');
Route::put('/edit_alumni/{id}', [AlumniController::class, 'update']);

Route::get('/Prestasi', [PrestasiController::class, 'index'])->name('Prestasi.Prestasi');
Route::get('/prestasi/{id}', [PrestasiController::class, 'index'])->name('Prestasi.show');
Route::post('/tambah_prestasi', [PrestasiController::class, 'Tambah'])->name('Prestasi.tambah');
Route::delete('/hapus_prestasi/{id}', [PrestasiController::class, 'hapus'])->name('Prestasi.hapus');
Route::put('/edit_prestasi/{id}', [PrestasiController::class, 'update']);

Route::get('/Karir', [KarirController::class, 'index'])->name('Karir.Karir');
Route::post('/tambah_karir', [KarirController::class, 'Tambah'])->name('Karir.tambah');
Route::get('/karir/{id}', [KarirController::class, 'index'])->name('Karir.show');

// Route::get('/About', function () {
//     return view('About', ['title' => 'About', 'page' => 'About']);
// });
// Route::get('/Posts', function () {
//     $Post = Post::latest()->get();
//     return view('Posts', ['title' => 'Blog', 'page' => 'Blog', 'posts' => $Post]);
// });

// Route::get('/Posts/{post:slug}', function (post $post) {
//     // $post = Post::find($id);
//     return view('Post', ['title' => 'Single Post', 'post' => $post]);
// });
// Route::get('/author/{user:username}', function (User $user) {
//     return view('Posts', ['title' => count($user->posts) . ' Articles By : ' . $user->name, 'posts' => $user->posts]);
// });
// Route::get('/kategori/{kategori:slug}', function (Kategori $kategori) {
//     // $post = Post::find($id);
//     return view('Posts', ['title' => count($kategori->post) . ' Articles In : ' . $kategori->kategori, 'posts' => $kategori->post]);
// });

// Route::get('/Contact', function () {
//     return view('Contact', ['title' => 'Contact', 'page' => 'Contact']);
// });
