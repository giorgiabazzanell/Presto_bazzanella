<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class,'homepage']) ->name('homepage');

Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('/articles/{article}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::middleware('auth')->group(function () {
    Route::get('/my-articles', [ArticleController::class, 'myArticles'])
        ->name('articles.my');

    Route::get('/create/article', [ArticleController::class, 'create'])
        ->name('create.article');

    Route::post('/articles', [ArticleController::class, 'store'])
        ->name('articles.store');
});

// Legal pages
Route::get('/privacy-policy', [PublicController::class, 'privacyPolicy'])
    ->name('privacy.policy');

Route::get('/cookie-policy', [PublicController::class, 'cookiePolicy'])
    ->name('cookie.policy');
