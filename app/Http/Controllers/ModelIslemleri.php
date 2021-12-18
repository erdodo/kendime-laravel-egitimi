<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class ModelIslemleri extends Controller
{
    public function ekle()
    {
        Bilgiler::create([
            'metin' => 'Yeni bilgi',
        ]);
    }
    public function guncelle()
    {
        Bilgiler::find(2)->update([
            'metin' => 'Yeni bilgi guncellendi',
        ]);
        Bilgiler::whereId(2)->update([
            'metin' => 'Yeni bilgi guncellendi',
        ]);
        Bilgiler::where('id', 2)->update([
            'metin' => 'Yeni bilgi guncellendi',
        ]);
    }
    public function sil()
    {
        Bilgiler::find(2)->delete();
        Bilgiler::whereId(2)->delete();
        Bilgiler::where('id', 2)->delete();
    }
    public function bilgiler()
    {
        $bilgiler = Bilgiler::all();
        foreach ($bilgiler as $bilgi) {
            echo $bilgi->metin . '<br>';
        }
    }
    public function bilgi()
    {
        $bilgi = Bilgiler::find(2);
        $bilgi = Bilgiler::whereId(2)->first();
        $bilgi = Bilgiler::where('id', 2)->first();
        
        echo $bilgi->metin;
    }
}
