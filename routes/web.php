<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [PageController::class, 'homePage'])->name('home');

Route::get('/collection', [PageController::class, 'collectionPage'])->middleware('auth')->name('collection');

Route::get('/packages', [PageController::class, 'packagesPage'])->middleware('auth')->name('packages');

Route::get('/login', [PageController::class, 'loginPage'])->name('login');

Route::get('/attendees', [PageController::class, 'attendeesPage'])->name('attendees');

// User authentication

Route::post('/login', [AuthController::class, 'loginUser'])->name('login.submit');
Route::get('/logout', [AuthController::class, 'logoutUser'])->name('logout.user');
Route::post('/attendees', [AuthController::class, 'attendeesUser'])->name('submit.attendees');
