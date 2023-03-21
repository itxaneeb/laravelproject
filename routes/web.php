<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth' , 'user-access:user')->group(function () {
    Route::post('/datastore', [HomeController::class, 'datastore'])->name('paymentstore');
});
Route::get('/invite/{id}', [HomeController::class, 'invite'])->name('invite');
Route::post('/withdrawreq', [HomeController::class, 'withdrawreq'])->name('withdrawreq');


Route::middleware('auth' , 'user-access:user' , 'check-status' )->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/link', [HomeController::class, 'link'])->name('link');
    Route::get('/product', [HomeController::class, 'product'])->name('product');
    Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/task', [HomeController::class, 'task'])->name('task');
    Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');
    Route::get('/withdraw', [HomeController::class, 'withdraw'])->name('withdraw');
    Route::get('/withdrawHistroy', [HomeController::class, 'withdrawHistroy'])->name('withdrawHistroy');
    Route::get('/verification', [HomeController::class, 'verification'])->name('verification');
    Route::post('/buyproduct', [HomeController::class, 'buyproduct'])->name('buyproduct');

  

});



require __DIR__.'/auth.php';
