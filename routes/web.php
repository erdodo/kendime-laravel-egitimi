<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
/*

Route::get('/hello', function () {
    return view('welcome');
});
 
|   get                      => hangi method ile çalışacak 
|   '/hello'                 => url takibi yapar. "http://localhost/hello" adresine gidildiğinde ne olacak.
|   return view('world');  => çalışacak olan view dosyası return edilir yani ekrana basılır.
 

Sınıf çağırmak için:
    - önce sınıfımızı tanımlıyoruz.
    - use App\Http\Controllers\SınıfIsmi;
    - sonra route tanımlamamızı yapıyoruz.
    - Route::get('/urlYolu', [SınıfIsmi::class, 'fonksiyonIsmi']);
    - artık linke tıklandığında 'SınıfIsmi' sınıfındaki 'fonksiyonIsmi fonksiyonu çalıştırır.
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ornek', [Ornek::class, 'test']);//Test methodu çalıştırılır.
Route::get('/gorunum', [Ornek::class, 'gorunum']);//Görünüm methodu çalıştırılır ve ekrana view basar
Route::get('/params/{isim}', [Ornek::class, 'params']);//Parametre alır ve ekrana yazdırır.
Route::get('/gorunumParams/{isim}', [Ornek::class, 'gorunumParams']);//GörünümParams methodu çalıştırılır ve isim değeri ekrana yazdırılır.