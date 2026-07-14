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
