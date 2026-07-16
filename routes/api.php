<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



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

Route::put('/products', function(){
    return 'PUT Request';
})
;

Route::patch('/products', function(){
    return 'PATCH Request';
})
;

Route::delete('/products', function(){
    return 'DELETE Request';
})
;

Route::get('/user/{name}', function($name) {
    return "Welcome $name";
});

Route::get('/products/{id}' , function($id){
    return "Product ID: $id";
});

Route::get('/order/{order}/item/{item}', function ($order, $item) {
    return "Order: $order - Item: $item";
});

Route::get('/welcome/{name?}' , function ($name ='Guest'){
    return "Welcome $name";
})
;

Route::get('/Categorv2' , function(){
    return "New Catgor";
}) ->name('Categorli');

Route::get('/link', function(){
    return route('Categorli');
});


Route::get('/restricted', function () {
    return 'Welcome';
})->middleware('check.age');


Route::prefix('v1')->group(function(){

    Route::get('/users' ,function(){
        return "Users";
    });

    Route::get('/products' , function(){
        return "Products";
    });

    Route::get('/orders' , function(){
        return  "Orders";
    });

});
