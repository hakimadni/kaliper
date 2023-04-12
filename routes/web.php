<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
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

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resources([
        'menu' => MenuController::class,
    ]);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/redirect', [AuthenticatedSessionController::class, 'redirectToProvider'])->name('redirect');

Route::get('/auth/callback', [AuthenticatedSessionController::class, 'handleProviderCallback']);


require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
