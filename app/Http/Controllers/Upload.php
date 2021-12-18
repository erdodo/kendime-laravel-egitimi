<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    public function index(Request $request)
    {
        $dosya = $request->file('dosya');
        $dosya->move(storage_path('app/public/dosyalar'), $dosya->getClientOriginalName());

        //$dosya->move(public_path('dosyalar'), $dosya->getClientOriginalName());
        return redirect()->route('upload');
        
    }
}
