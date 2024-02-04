<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
});
Route::get('/', [AdminController::class, 'home']);
Route::get('/apna-home', [AdminController::class, 'home'])->name('apna-home');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/add-rooms', [AdminController::class, 'add_rooms'])->name('add-rooms');
Route::post('/add-rooms', [AdminController::class, 'save_rooms'])->name('add-rooms');
Route::get('/rooms-list', [AdminController::class, 'rooms_list'])->name('rooms-list');
Route::get('/edit-rooms/{id}', [AdminController::class, 'edit'])->name('edit-rooms');
Route::put('/update-rooms/{id}', [AdminController::class, 'update'])->name('update-rooms');
Route::delete('/rooms-list/{id}=delete', [AdminController::class, 'remove'])->name('delete-room');
Route::get('/rooms/{id}', [HomeController::class, 'rooms'])->name('rooms');
Route::post('/rooms/{id}', [HomeController::class, 'book_rooms'])->name('rooms');
Route::post('/complains', [HomeController::class, 'complains'])->name('complains');
Route::get('/complains-list', [AdminController::class, 'complains_list'])->name('complains-list');


