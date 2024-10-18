<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PaginaController::class,'home'])->name('pagina.home');
Route::get('/index', [PaginaController::class,'index'])->name('pagina.index');
Route::get('/categs', [PaginaController::class,'categs'])->name('pagina.categs');
Route::get('/category/{id}', [PaginaController::class,'category_simple'])->name('pagina.category');
Route::get('/show/{post}', [PostController::class,'show'])->name('pagina.show');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/create',[PostController::class, 'create'])->name('post.create');
        Route::get('/post-list',[PostController::class, 'postList'])->name('post.post-list');
        Route::get('/edit/{post}',[PostController::class, 'edit'])->name('post.edit');
        Route::put('/update/{id}',[PostController::class, 'update'])->name('post.update');
        Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});
