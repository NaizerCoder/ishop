<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', IndexController::class);
Route::get('/admin', \App\Http\Controllers\main\IndexController::class);

/*CATEGORY*/
Route::group(['namespace'=>'App\Http\Controllers\Category', 'prefix'=>'admin/categories'], function(){

    Route::get('/','IndexController')->name('category.index');
    Route::get('/create','CreateController')->name('category.create');
    Route::get('/show/{category}','ShowController')->name('category.show');
    Route::post('/','StoreController')->name('category.store');
    Route::get('/{category}/edit','EditController')->name('category.edit');
    Route::patch('/{category}','UpdateController')->name('category.update');
    Route::delete('/{category}','DeleteController')->name('category.delete');

});


/*OTHER*/
Route::fallback(function ()
{
    return redirect()->to('/');
});



