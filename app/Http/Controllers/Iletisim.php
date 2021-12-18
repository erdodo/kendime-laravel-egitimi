<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisim_Model;

class Iletisim extends Controller
{
    public function gorunum()
    {
        return view('iletisim');
    }
    public function veri(Request $request)
    {
        Iletisim_Model::create($request->all());
        return 'Veri eklendi';
    }
    public function mesajlar()
    {
        $mesajlar = Iletisim_Model::all();
        return view('mesajlar', compact('mesajlar'));
    }
}
