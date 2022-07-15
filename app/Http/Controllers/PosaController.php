<?php

namespace App\Http\Controllers;

use App\Models\posa;
use Illuminate\Http\Request;

class PosaController extends Controller
{
    public function index()
    {
        return view('penerimaan-luar');
    }
    public function store(Request $request)
    {
        $pos = posa::create([
            'jmlh_putih' => $request->jmlh_putih,
            'jmlh_merah' => $request->jmlh_merah,
            'jmlh_tiger' => $request->jmlh_tiger,
            'total' => $request->jmlh_putih + $request->jmlh_merah + $request->jmlh_tiger = $request->total,
        ]);

        //redirect dengan pesan sukses
        return redirect()->route('posa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}