<?php

use App\Http\Controllers\DiscographyController;
use App\Http\Controllers\LyricController;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('discography', [DiscographyController::class, 'discography'])->name('discography');
Route::get('lyrics', [LyricController::class, 'lyrics'])->name('lyrics');
Route::get('shop', [ShopController::class, 'shop'])->name('shop');
