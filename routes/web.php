<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('acceuil', function(){
    echo 'Bienvenue sur le site';
});

Route::get('/test1', function(){
    return view('testvue1');
});

Route::get('login', function(){
    echo 'login';
});

Route::get('page/1', function(){
    echo 'page1';
});

Route::get('article/{n}', function($n){
    return view ('article', ['numero' => $n]);
});

Route::get('/test5', 'App\Http\Controllers\Controller@test');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tp6_ex1', function () {
    return view('TP6_ex1');
});

// Route::get('{n}', function($n){
//     return 'Je suis la page ' . $n . " !";
// });

Route::get('/form1', function(){
    return view('form1');
});

// Route::post('/form2', function(){
//     return view('form2');
// });

Route::post('/form2', 'App\Http\Controllers\MyController@getData');