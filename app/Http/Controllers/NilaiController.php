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

	public function tambahnilai()
	{
		return view('tambahnilai');
	}

    public function storenilai(Request $request)
    {
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
    }

}
