<?php

use Illuminate\Support\Facades\Route;

Route::get('/login',[
    App\Http\Controllers\AuthController::class,
    'index'
])->middleware('guest')->name('login');

Route::get('/signup',[
    App\Http\Controllers\AuthController::class,
    'signup'
])->middleware('guest')->name('signup');

Route::get('/logout',[
    App\Http\Controllers\AuthController::class,
    'logout'
])->name('logout');

Route::post('/login/verify',[
    App\Http\Controllers\AuthController::class,
    'verify'
])->name('login.verify');

Route::post('/signup/verify',[
    App\Http\Controllers\AuthController::class,
    'signupVerify'
])->name('signup.verify');

Route::group(['middleware' => 'user'], function(){
    Route::get('/',[
        App\Http\Controllers\Website\ProductController::class,
        'home'
    ])->middleware('customer')->name('home');


    Route::get('/cms/products',[
        App\Http\Controllers\CMS\ProductController::class,
        'index'
    ])->middleware('admin')->name('cms.products');

    Route::get('/cms/products/add',[
        App\Http\Controllers\CMS\ProductController::class,
        'add'
    ])->middleware('admin')->name('cms.product.add');  

    Route::post('/cms/products/create',[
        App\Http\Controllers\CMS\ProductController::class,
        'create'
    ])->middleware('admin')->name('cms.product.create');  
});
