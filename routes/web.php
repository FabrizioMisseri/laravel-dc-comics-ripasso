<?php

use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Controller;
use App\Models\Comic;
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
    $comics = Comic::all();
    return view('comics.welcome', compact('comics'));
})->name('welcome');

Route::resource('comics', ComicsController::class);
