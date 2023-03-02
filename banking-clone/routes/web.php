<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\{WalletController, UserDashboardController};
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
    return view('welcome');
})->name('home');

Route::get('/dashboard', [UserDashboardController::class, 'index'])->middleware(['auth', 'verified',])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('user/account/{account}', [WalletController::class, 'getAccName']);
    Route::post('/send/money', [WalletController::class, 'send'])->name('send.money');
});

require __DIR__ . '/auth.php';
