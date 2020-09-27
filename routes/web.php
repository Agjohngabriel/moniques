<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookingController;

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
})->name('welcome');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/book', [bookingController::class, 'Postbooking']);
Route::post('/info', [bookingController::class, 'Postinfo']);
Route::post('/detail', [bookingController::class, 'Postdetail']);
Route::get('/book', [bookingController::class, 'booking']);
Route::get('/info', [bookingController::class, 'info']);
Route::get('/details', [bookingController::class, 'detail']);
Route::post('/store', [bookingController::class, 'store']);

