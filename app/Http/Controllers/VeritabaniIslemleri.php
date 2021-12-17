<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VeritabaniIslemleri extends Controller
{
    public function ekle()
    {
        DB::table('bilgiler')->insert([
            'metin' => 'Yeni bilgi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    public function guncelle()
    {
        DB::table('bilgiler')->where('id', 2)->update([
            'metin' => 'Yeni bilgi guncellendi',
            'updated_at' => now()
        ]);
    }
    public function sil()
    {
        DB::table('bilgiler')->where('id', 2)->delete();
    }
    public function bilgiler()
    {
        $bilgiler = DB::table('bilgiler')->get();
        foreach ($bilgiler as $bilgi) {
            echo $bilgi->metin . '<br>';
        }
    }
    public function bilgi()
    {
        $bilgi = DB::table('bilgiler')->where('id', 2)->first();
        echo $bilgi->metin;
    }
}
