<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\PortfolioController;
use App\Models\Titre;
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
    return view('welcome');
});
Route::get('/backoffice', [HeaderController::class,'index'])->name('backoffice');

Route::get('/index', [indexController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/backTemplate', function () {
    $titres = Titre::all();
    return view('backoffice.template.main',compact('titres'));
})->middleware(['auth']);


Route::resource('abouts',AboutController::class)->middleware(['auth']);
Route::resource('footers',FooterController::class)->middleware(['auth']);
Route::resource('portfolios',PortfolioController::class)->middleware(['auth']);
Route::resource('header_data',HeaderController::class)->middleware(['auth']);
require __DIR__.'/auth.php';
