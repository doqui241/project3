<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
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
Route::controller(TicketController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/pay', 'pay')->name('pay');
});
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'index')->name('events.event');
    Route::get('/detail_event/{id}', 'show')->name('event.show');
});


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/contact', function () {
    return view('contact');
});