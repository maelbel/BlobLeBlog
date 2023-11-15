<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
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


Route::middleware('auth')->group(function () {
    
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/account', function () {
        return view('account');
    })->name('account');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/article/show', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/article/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::patch('/articles', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
