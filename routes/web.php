<?php

use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminSoloEventController;
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

Route::get('/beranda', [App\Http\Controllers\berandaController::class, 'index']);

Route::get('/tentang', [App\Http\Controllers\tentangController::class, 'index']);

Route::get('/dimensi', [App\Http\Controllers\dimensiController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\dimensiController::class, 'dashboard'])->name('dashboard');
Route::get('/create', [App\Http\Controllers\dimensiController::class, 'create'])->name('dimensi.create');
Route::post('/store', [App\Http\Controllers\dimensiController::class, 'store'])->name('dimensi.store');
Route::get('/edit/{id}', [App\Http\Controllers\dimensiController::class, 'edit'])->name('dimensi.edit');
Route::put('/update/{id}', [App\Http\Controllers\dimensiController::class, 'update'])->name('dimensi.update');
Route::delete('/delete/{id}', [App\Http\Controllers\dimensiController::class, 'delete'])->name('dimensi.delete');

Route::get('/soloevent', [App\Http\Controllers\soloeventController::class, 'index']);
Route::get('/galerise', [App\Http\Controllers\dimensiController::class, 'galerise'])->name('galerise');
Route::get('/create', [App\Http\Controllers\dimensiController::class, 'create'])->name('galeri.create');
Route::post('/store', [App\Http\Controllers\dimensiController::class, 'store'])->name('galeri.store');
Route::get('/edit/{id}', [App\Http\Controllers\dimensiController::class, 'edit'])->name('galeri.edit');
Route::put('/update/{id}', [App\Http\Controllers\dimensiController::class, 'update'])->name('galeri.update');
Route::delete('/delete/{id}', [App\Http\Controllers\dimensiController::class, 'delete'])->name('galeri.delete');

Route::get('/experience', [App\Http\Controllers\experienceController::class, 'index']);

Route::get('/dimensiutama', [App\Http\Controllers\dimensiutamaController::class, 'index']);

Route::get('/dimensidetail', [App\Http\Controllers\dimensidetailController::class, 'index']);

//Admin
Route::get('/admin/soloevent', [AdminSoloEventController::class, 'index'])->name('indexSoloEvent');
Route::get('/admin/soloevent/add', [AdminSoloEventController::class, 'add'])->name('addViewSoloEvent');
Route::post('/admin/soloevent/add', [AdminSoloEventController::class, 'create'])->name('addSoloEvent');
Route::get('/admin/soloevent/edit/{id}', [AdminSoloEventController::class, 'edit'])->name('editSoloEvent');
Route::post('/admin/soloevent/update', [AdminSoloEventController::class, 'update'])->name('updateSoloEvent');
Route::get('/admin/soloevent/delete/{id}', [AdminSoloEventController::class, 'delete'])->name('deleteSoloEvent');

Route::get('/admin/article', [AdminArticleController::class, 'index'])->name('indexArticle');
Route::get('/admin/article/add', [AdminArticleController::class, 'add'])->name('addViewArticle');
Route::post('/admin/article/add', [AdminArticleController::class, 'create'])->name('addArticle');
Route::get('/admin/article/edit/{id}', [AdminArticleController::class, 'edit'])->name('editArticle');
Route::post('/admin/article/update', [AdminArticleController::class, 'update'])->name('updateArticle');
Route::get('/admin/article/delete/{id}', [AdminArticleController::class, 'delete'])->name('deleteArticle');
