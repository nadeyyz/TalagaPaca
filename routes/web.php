<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('components.about');
})->name('about');

Route::get('/atraksi-wisata', function () {
    return view('components.atraksi');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/jungle-tracking', function () {
    return view('components.atraksi.jungle-tracking');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/birdwatching', function () {
    return view('components.atraksi.birdwatching');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/gua', function () {
    return view('components.atraksi.goa');
})->name('atraksi-wisata');

Route::get('/atraksi-wisata/keliling-danau', function () {
    return view('components.atraksi.keliling-danau');
})->name('atraksi-wisata');

Route::get('/comming-soon', function () {
    return view('components.commingsoon');
})->name('comming-soon');
Route::get('/fasilitas', function () {
    return view('components.fasilitas');
})->name('fasilitas');
Route::get('/publikasi', function () {
    return view('components.publikasi');
})->name('publikasi');

Route::get('change/lang', [LocalizationController::class, 'lang_change'])->name('LangChange');
