<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel';
});

Route::get('/api/info', function () {
    return response()->json([
        'name' => 'Mohammed Ahmed',
        'framework' => 'Laravel',
        'version' => app()->version(),
    ]);
});

Route::get ('/products', function(){
    return 'GET Request';
});

Route::post('/products', function(){
    return 'POST Request';
});
