<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth; 

Route::middleware('auth','user-access:admin')->group(function () {

    Route::get('/ad', [HomeController::class, 'admin'])->name('admin'); 
    Route::get('/usertable', [HomeController::class, 'usertable'])->name('usertable');
    Route::get('/newuser', [HomeController::class, 'newuser'])->name('newuser');
    Route::post('/newuserrr', [HomeController::class, 'newuserrr'])->name('newuserrr');
    Route::get('/levellist', [HomeController::class, 'levellist'])->name('levellist');
    Route::get('/addlevel', [HomeController::class, 'addlevel'])->name('addlevel');
    Route::post('/addlevell', [HomeController::class, 'addlevell'])->name('addlevellist');
    Route::post('/addlevell', [HomeController::class, 'addlevell'])->name('addlevellist');
    Route::get('/editlevellist/{id}', [HomeController::class, 'editlevellist'])->name('editlevellist');
    Route::post('/updatelevellist/{id}', [HomeController::class, 'updatelevellist'])->name('updatelevellist');
    Route::get('/rejected', [HomeController::class, 'rejected'])->name('rejected');
    Route::get('/Packageslist', [HomeController::class, 'Packageslist'])->name('Packageslist');
    Route::get('/addpackages', [HomeController::class, 'addpackages'])->name('addpackages');
    Route::post('/addpackageslist', [HomeController::class, 'addpackageslist'])->name('addpackageslist');
    Route::get('/editpackageslist/{id}', [HomeController::class, 'editpackageslist'])->name('editpackageslist');
    Route::post('/updateeditpackageslist/{id}', [HomeController::class, 'updateeditpackageslist'])->name('updateeditpackageslist');
    Route::get('/withdrawrequest', [HomeController::class, 'withdrawrequest'])->name('withdrawrequest');
    Route::get('/editusertable/{id}', [HomeController::class, 'editusertable'])->name('editusertable');
    Route::post('/updateusertable/{id}', [HomeController::class, 'updateusertable'])->name('updateusertable');
    Route::get('/addproduct}', [HomeController::class, 'addproduct'])->name('addproduct');
    Route::post('/addprodutss}', [HomeController::class, 'addprodutss'])->name('addprodutss');
    Route::get('/addmoreproducts}', [HomeController::class, 'addmoreproducts'])->name('addmoreproducts');
    Route::get('/deleteaddproduct/{id}', [HomeController::class, 'deleteaddproduct'])->name('deleteaddproduct');
    Route::get('/editaddproduct/{id}', [HomeController::class, 'editaddproduct'])->name('editaddproduct');
    Route::post('/updateaddproduct/{id}', [HomeController::class, 'updateaddproduct'])->name('updateaddproduct');
    Route::get('/links', [HomeController::class, 'links'])->name('links');

    
});
