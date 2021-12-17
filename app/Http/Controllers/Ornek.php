<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller{
  function test(){
    return 'Erdoğan Yeşil';//'Erdoğan Yeşil' değerini döndür;
  }
  function gorunum(){
    return view('ornek');//ornek isimli views dosyası çalıştır;
  }
  public function params($isim)
  {
    return 'Merhaba '.$isim;//Url'den gelen isim değeri ekrana yazdırılır.
  }
  function gorunumParams($isim){
    $degerler=[
      'isim'=>$isim,
    ];
    return view('ornek',$degerler);//ornek isimli views dosyası çalıştır ve isim değeri ekrana yazdırılır.
  }
}
