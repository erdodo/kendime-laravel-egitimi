<?php

use Illuminate\Support\Facades\Route;

/*

Route::get('/hello', function () {
    return view('welcome');
});
 
|   get                      => hangi method ile çalışacak 
|   '/hello'                 => url takibi yapar. "http://localhost/hello" adresine gidildiğinde ne olacak.
|   return view('world');  => çalışacak olan view dosyası return edilir yani ekrana basılır.
 
*/

Route::get('/', function () {
    return view('welcome');
});
