<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TrxController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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

Route::middleware('auth')->group(function () {
    Route::resources([
        'menu' => MenuController::class,
        'order' => OrderController::class,
        'trx' => TrxController::class,
    ]);
    
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/order/updatestat', [OrderController::class, 'updateStatus'])->name('order.updateStatus');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/delete', [CartController::class, 'deleteCartItem'])->name('cart.delete');
    Route::get('transaction', [TrxController::class, 'store'])->name('member.transaction.store');
    Route::get('transaction/storeagain/{code}', [TrxController::class, 'storeagain'])->name('member.transaction.storeagain');
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/save', [ProfileController::class, 'save'])->name('profile.save');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/addashboard', [OwnerController::class, 'index'])->name('owner.dashboard');
    Route::get('/admenu', [OwnerController::class, 'menu'])->name('owner.menu');
    Route::get('/adtrx', [OwnerController::class, 'trx'])->name('owner.trx');

});
Route::get('/ty', function () {
    return view('emails.trx-success');
});

Route::get('/auth/redirect', [AuthenticatedSessionController::class, 'redirectToProvider'])->name('redirect');

Route::get('/auth/callback', [AuthenticatedSessionController::class, 'handleProviderCallback']);


require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
