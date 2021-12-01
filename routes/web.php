<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('/', 'IndexController')->name('main.page.index');
    });
});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['auth']], function() {
    Route::group(['namespace' => 'Contact', 'prefix' => 'contacts'], function() {
        Route::get('/', 'IndexController')->name('contact.index');
        Route::get('/create', 'CreateController')->name('contact.create');
        Route::post('/store', 'StoreController')->name('contact.store');
        Route::get('/{contact}', 'ShowController')->name('contact.show');
        Route::get('/{contact}/edit', 'EditController')->name('contact.edit');
        Route::patch('/{contact}', 'UpdateController')->name('contact.update');
        Route::delete('/{contact}', 'DeleteController')->name('contact.delete');
    });
});
Auth::routes();
