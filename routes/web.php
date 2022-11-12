<?php

use App\Http\Controllers\AppImagesController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\InquiryController;
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
    return view('index');
});


Route::get('/datenschutz', function () {
    return view('datenschutz');
});

Route::get('/der-pelletratgeber', function () {
    return view('der-pelletratgeber');
});

Route::get('/der-stoff-aus-dem-die-pellets-sind', function () {
    return view('der-stoff-aus-dem-die-pellets-sind');
});

Route::get('/german-pellets-in-saecken', function () {
    return view('german-pellets-in-saecken');
});

Route::get('/heizen-mit-holzpellets-ist-wie-lagerfeuer', function () {
    return view('heizen-mit-holzpellets-ist-wie-lagerfeuer');
});

Route::get('/holzpellets-kaufen', function () {
    return view('holzpellets-kaufen');
});

Route::get('/holzpellets-lagerung', function () {
    return view('holzpellets-lagerung');
});

Route::get('/impressum', function () {
    return view('impressum');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/mit-pellets-heizen-ist-bequem-und-komfortabel', function () {
    return view('mit-pellets-heizen-ist-bequem-und-komfortabel');
});

Route::get('/pellet-ist-nicht-gleich-pellet', function () {
    return view('pellet-ist-nicht-gleich-pellet');
});

Route::get('/powerplus-macht-holzpellets-zu-hightech', function () {
    return view('powerplus-macht-holzpellets-zu-hightech');
});

Route::get('/sind-oel-und-gas-noch-zeitgemaess', function () {
    return view('sind-oel-und-gas-noch-zeitgemaess');
});

Route::get('/wachstumsmarkt-holzpellets-kraft-werke-als-chance', function () {
    return view('wachstumsmarkt-holzpellets-kraft-werke-als-chance');
});

Route::get('/danke', function () {
    return view('danke');
});

Auth::routes(['register' => false]);

//Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
  
Route::resource('submissions', SubmissionController::class)->middleware('auth');
Route::resource('inquiries', InquiryController::class)->middleware('auth');
Route::resource('app-images', AppImagesController::class)->middleware('auth');
Route::resource('content', ContentController::class)->middleware('auth');

Route::post('/submissions',[App\Http\Controllers\SubmissionController::class, 'store']);
Route::post('/inquiries', [App\Http\Controllers\InquiryController::class, 'store']);
