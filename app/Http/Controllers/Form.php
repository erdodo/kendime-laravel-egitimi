<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function gorunum()
    {
        $data=['mesaj'=>''];
        return view('form',$data);
    }
    public function veri( Request $request)
    {
        $isim = $request->isim;
        $soyisim = $request->soyisim;
       
        return 'Veri Alındı isim: '.$isim.' soyisim: '.$soyisim;
    }
}
