<?php

use Illuminate\Support\Facades\Route;

/*

Route::get('/', function () {
    return view('welcome');
});
 
|   '/hello'                 => url takibi yapar. "http://localhost/hello" adresine gidildiğinde ne olacak.
|   return view('welcome');  => çalışacak olan view dosyası return edilir yani ekrana basılır.
 
*/

Route::get('/', function () {
    return view('welcome');
});
