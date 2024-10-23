<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PaginaController::class,'home'])->name('pagina.home');
Route::get('/index', [PaginaController::class,'home'])->name('pagina.home');
Route::get('/home', [PaginaController::class,'home'])->name('pagina.home');
Route::get('/categs', [PaginaController::class,'categs'])->name('pagina.categs');
Route::get('/category/{id}', [PaginaController::class,'category_simple'])->name('pagina.category');
Route::get('/show/{post}', [PostController::class,'show'])->name('pagina.show');


Route::get('/dashboard',
function () {
    return view('dashboard');})->middleware(['auth','verified'])->name('dashboard');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified', 'password.confirm' ])->group(function () {
        Route::get('/create',[PostController::class, 'create'])->name('post.create');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/post-list',[PostController::class, 'postList'])->name('post.post-list');
        Route::get('/edit/{post}',[PostController::class, 'edit'])->name('post.edit');
        Route::put('/update/{id}',[PostController::class, 'update'])->name('post.update');
        Route::delete('/destroy/{post}',[PostController::class, 'destroy'])->name('post.destroy');

        //Categorias
        Route::get('/index-categ', [CategoryController::class, 'index'])->name('index-categ');
        Route::get('/edit-categ/{category}', [CategoryController::class, 'edit'])->name('edit-categ');
        Route::put('/chequear/{category}', [CategoryController::class, 'chequear'])->name('chequear-categ');
        Route::put('/categ-update/{category}', [CategoryController::class, 'update'])->name('update-categ');
});
