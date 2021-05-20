<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cryptosController;
use App\Http\Controllers\crypto;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\latestlisting;


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
/*
Route::get('/forum', function () {
    return view('forumindex');
});
*/
Route::get('/forum', [IdeaController::class, 'index'])->name('idea.forumindex');
Route::get('/idea/{idea:slug}', [IdeaController::class, 'show'])->name('idea.show');



require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

Route::get('/', [cryptosController::class,'index']);

Route::get('Cryptocurrencies', [crypto::class,'index']);
Route::get('Listing', [latestlisting::class,'index']);

