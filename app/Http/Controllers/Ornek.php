<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller{
  function test(){
    return 'Erdoğan Yeşil';//'Erdoğan Yeşil' değerini döndür;
  }
  function gorunum(){
    return views('ornek');//ornek isimli views dosyası çalıştır;
  }
}
