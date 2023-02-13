<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\Admin\CreditController;
use App\Http\Controllers\Admin\ExtensionController;
use App\Http\Controllers\Admin\RefersController;
use App\Http\Controllers\BacklinkController;

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
    return view('home.index');
});

Route::prefix('google')->name('google.')->group(function () {
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');

    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::get('invite', [GoogleController::class, 'inviteWithGoogle'])->name('invite');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('refers', RefersController::class);
    Route::resource('download', ExtensionController::class);
    Route::resource('credit', CreditController::class);
    Route::resource('stats', StatsController::class);
    Route::resource('backlink', BacklinkController::class);
    Route::any('backlink-delete/{id}', [BacklinkController::class, 'deleted'])->name('deleted');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
