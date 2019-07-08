<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function(){
    return view('index');
});

Route::get('/show/{id}', 'ContactController@show');

Route::get('/create', function(){
    return view('create');
});

/*Route::get('/', function () {
    return view('welcome',
        [
            'title' => 'An even cooler way to do the title'
        ]
    );
});

Route::get('/example', function () {
    return view('example',
        [
            'title' => "Page 2 - A little about the Author",
            'university' => "DIU",
            'author' => json_encode([
                "name" => "Fisayo Afolayan",
                "role" => "Software Enginner",
                "code" => "Always keeping it clean"
            ])
        ]
    );
});*/
