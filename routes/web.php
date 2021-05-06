<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[
    App\Http\Controllers\AuthController::class,
    'index'
])->name('login');

Route::post('/login/verify',[
    App\Http\Controllers\AuthController::class,
    'verify'
])->name('login.verify');

Route::group(['middleware' => 'user'], function(){
    Route::get('/',[
        App\Http\Controllers\Website\ProductController::class,
        'home'
    ])->middleware('customer')->name('home');


    Route::get('/cms/products',[
        App\Http\Controllers\CMS\ProductController::class,
        'index'
    ])->middleware('admin')->name('cms.products');
});
