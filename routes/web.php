<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
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
    return view('index');
})->name('home');



Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/faculty/{type}', [PageController::class, 'faculty'])->name('faculty');
Route::get('/committee/{type}', [PageController::class, 'committee'])->name('committee');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');





Route:: prefix('administration')->name('administration/')->group(function(){
    Route::get('/principal-message', function () {
        return view('Administration.principalMessage');
    })->name('principal-message');
    Route::get('/about-college', function () {
        return view('Administration.aboutCollege');
    })->name('about-college');
    Route::get('/mission', function () {
        return view('Administration.mission');
    })->name('mission');
    Route::get('/vision', function () {
        return view('Administration.vision');
    })->name('vision');
    Route::get('/aim', function () {
        return view('Administration.aim');
    })->name('aim');

});
