<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function indexnilai()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

    }
}
