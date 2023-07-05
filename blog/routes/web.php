<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello';
});

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

//Comment
Route::post('articles/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
//


Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{id}/update', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
