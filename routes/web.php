<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Form;
use App\Http\Controllers\VeritabaniIslemleri;
use App\Http\Controllers\ModelIslemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\Upload;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ornek', [Ornek::class, 'test']);//Test methodu çalıştırılır.
Route::get('/gorunum', [Ornek::class, 'gorunum']);//Görünüm methodu çalıştırılır ve ekrana view basar
Route::get('/params/{isim}', [Ornek::class, 'params']);//Parametre alır ve ekrana yazdırır.
Route::get('/gorunumParams/{isim}', [Ornek::class, 'gorunumParams']);//GörünümParams methodu çalıştırılır ve isim değeri ekrana yazdırılır.
Route::get('/sablon',[Ornek::class, 'sablon'])->name('onePage');//Sablon methodu çalıştırılır ve ekrana view basar.

Route::get('/formGorunum', [Form::class, 'gorunum'])->name('formGorunum');//FormGorunum methodu çalıştırılır ve ekrana view basar.
Route::middleware('formKontrol')->post('/formVeri', [Form::class, 'veri'])->name('formVeri');

Route::get('/veriEkle', [VeritabaniIslemleri::class, 'ekle']);
Route::get('/veriGuncelle', [VeritabaniIslemleri::class, 'guncelle']);
Route::get('/veriSil', [VeritabaniIslemleri::class, 'sil']);
Route::get('/bilgiler', [VeritabaniIslemleri::class, 'bilgiler']);
Route::get('/bilgi', [VeritabaniIslemleri::class, 'bilgi']);

Route::get('/modelVeriEkle', [ModelIslemleri::class, 'ekle']);
Route::get('/modelVeriGuncelle', [ModelIslemleri::class, 'guncelle']);
Route::get('/modelVeriSil', [ModelIslemleri::class, 'sil']);
Route::get('/modelBilgiler', [ModelIslemleri::class, 'bilgiler']);
Route::get('/modelBilgi', [ModelIslemleri::class, 'bilgi']);

Route::get('/iletisim', [Iletisim::class, 'gorunum']);
Route::post('/iletisimVeri', [Iletisim::class, 'veri'])->name('iletisimVeri');
Route::get('/mesajlar', [Iletisim::class, 'mesajlar']);

Route::get('/upload', function () {
    return view('upload');
});
Route::post('/upload', [Upload::class, 'index'])->name('upload');

