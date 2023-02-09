<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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


Auth::routes();
Route::get('/event', [EventController::class, 'index'])->name('events');

Route::get('/event/create', [EventController::class, 'create'])->name('create_event');

Route::post('/event/save', [EventController::class, 'store'])->name('save_event');

Route::get('/event/show/{eventId}', [EventController::class, 'show'])->name('event_show');

Route::get('/event/edit/{eventId}', [EventController::class, 'edit'])->name('edit_event');

Route::put('/event/update/{eventId}', [EventController::class, 'update'])->name('update_event');

Route::delete('/event/delete/{eventId}', [EventController::class, 'destroy'])->name('delete_event');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

