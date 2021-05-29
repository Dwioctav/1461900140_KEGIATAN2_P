<?php

namespace App\Http\Controllers;
use App\Models\ms_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class buku extends Controller
{
    public function buku()
    {
        $buku = DB::table('ms_buku')->get();
        return view('buku0140', ['ms_buku'=>$buku]);
    }
}
