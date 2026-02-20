<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('acceuil', function(){
    echo 'Bienvenue sur le site';
});

Route::get('{n}', function($n){
    return 'Je suis la page ' . $n . " !";
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

Route::get('/pageprincipale', function () {
    return view('pageprincipale');
});