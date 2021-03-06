<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('index.home');
    Route::post('/store', [HomeController::class, 'store'])->name('post.store');
    Route::delete('/destroy/{chamado}', [HomeController::class, 'destroy'])->name('post.destroy');
});

Auth::routes();


