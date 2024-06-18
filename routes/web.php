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
Route::get('/admin', \App\Http\Controllers\main\IndexController::class)->name('main.index');

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

/*GROUP*/
Route::group(['namespace'=>'App\Http\Controllers\Group', 'prefix'=>'admin/group'], function(){

    Route::get('/','IndexController')->name('group.index');
    Route::get('/create','CreateController')->name('group.create');
    Route::get('/show/{group}','ShowController')->name('group.show');
    Route::post('/','StoreController')->name('group.store');
    Route::get('/{group}/edit','EditController')->name('group.edit');
    Route::patch('/{group}','UpdateController')->name('group.update');
    Route::delete('/{group}','DeleteController')->name('group.delete');

});

/*TAG*/
Route::group(['namespace'=>'App\Http\Controllers\Tag', 'prefix'=>'admin/tags'], function(){

    Route::get('/','IndexController')->name('tag.index');
    Route::get('/create','CreateController')->name('tag.create');
    Route::get('/show/{tag}','ShowController')->name('tag.show');
    Route::post('/','StoreController')->name('tag.store');
    Route::get('/{tag}/edit','EditController')->name('tag.edit');
    Route::patch('/{tag}','UpdateController')->name('tag.update');
    Route::delete('/{tag}','DeleteController')->name('tag.delete');

});

/*COLOR*/
Route::group(['namespace'=>'App\Http\Controllers\Color', 'prefix'=>'admin/colors'], function(){

    Route::get('/','IndexController')->name('color.index');
    Route::get('/create','CreateController')->name('color.create');
    Route::get('/show/{color}','ShowController')->name('color.show');
    Route::post('/','StoreController')->name('color.store');
    Route::get('/{color}/edit','EditController')->name('color.edit');
    Route::patch('/{color}','UpdateController')->name('color.update');
    Route::delete('/{color}','DeleteController')->name('color.delete');

});

/*USER*/
Route::group(['namespace'=>'App\Http\Controllers\User', 'prefix'=>'admin/users'], function(){

    Route::get('/','IndexController')->name('user.index');
    Route::get('/create','CreateController')->name('user.create');
    Route::get('/show/{user}','ShowController')->name('user.show');
    Route::post('/','StoreController')->name('user.store');
    Route::get('/{user}/edit','EditController')->name('user.edit');
    Route::patch('/{user}','UpdateController')->name('user.update');
    Route::delete('/{user}','DeleteController')->name('user.delete');

});

/*PRODUCT*/
Route::group(['namespace'=>'App\Http\Controllers\Product', 'prefix'=>'admin/products'], function(){

    Route::get('/','IndexController')->name('product.index');
    Route::get('/create','CreateController')->name('product.create');
    Route::get('/show/{product}','ShowController')->name('product.show');
    Route::post('/','StoreController')->name('product.store');
    Route::get('/{product}/edit','EditController')->name('product.edit');
    Route::patch('/{product}','UpdateController')->name('product.update');
    Route::delete('/{product}','DeleteController')->name('product.delete');

    /*IMAGES*/
    Route::group(['namespace'=>'Image', 'prefix'=>'image'], function(){
        Route::get('/{image}','DeleteController')->name('image.delete');
    });


});


/*OTHER*/
Route::fallback(function ()
{
    return redirect()->to('/');
});



