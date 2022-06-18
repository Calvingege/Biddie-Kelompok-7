<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\AddsController;
use App\Http\Controllers\SaldoController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get(
    '/home', function() {
    return view('Home');
    })->name('Home');

Route::get(
    '/create/bid',
    [BidController::class, 'CreateBid']
)->name('CreateBid');

Route::post(
    '/store/bid',
    [BidController::class, 'StoreBid']
)->name('StoreBid');

Route::get(
    '/show/bid',
    [BidController::class, 'ShowBid']
)->name('ShowBid');

Route::get(
    '/create/adds',
    [AddsController::class, 'CreateAdds']
)->name('CreateAdds');

Route::get(
    '/show/adds',
    [BidController::class, 'ShowAdds']
)->name('ShowAdds');

Route::post(
    '/store/adds',
    [AddsController::class, 'StoreAdds']
)->name('StoreAdds');

Route::get(
    '/about', function() {
        return view('About');
    })->name('About');

Route::get(
    '/create/saldo',
    [SaldoController::class, 'CreateSaldo']
)->name('CreateSaldo');

Route::put(
    '/store/saldo',
    [SaldoController::class, 'StoreSaldo']
)->name('StoreSaldo');

require __DIR__.'/auth.php';
