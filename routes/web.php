<?php

use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PaginaController::class,'home'])->name('pagina.home');
Route::get('/index', [PaginaController::class,'index'])->name('pagina.index');
Route::get('/categs', [PaginaController::class,'categs'])->name('pagina.categs');
Route::get('/show/{post}', [PaginaController::class,'show'])->name('pagina.show');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});