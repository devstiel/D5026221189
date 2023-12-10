<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SirupController extends Controller
{
    //mengambil data dari table sirup
    public function index(){
    $sirup = DB::table('sirup')->paginate(5);

    //mengirim data sirup ke view indexSirup
    return view('indexSirup', ['sirup' => $sirup]);
    }


    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table sirup sesuai pencarian data
		$sirup = DB::table('sirup')
		->where('merksirup','like',"%".$cari."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('indexSirup',['sirup' => $sirup]);
	}


    public function tambah(){
    // memanggil view tambah sirup
	return view('tambahSirup');
    }

    public function store(Request $request)
    {
	// insert data ke table sirup
	DB::table('sirup')->insert([
		'merksirup' => $request->merksirup,
		'stocksirup' => $request->stocksirup,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman sirup
	return redirect('/sirup');
    }

    public function view($kodesirup) {
        // mengambil data sirup berdasarkan id yang dipilih
	    $sirup = DB::table('sirup')->where('kodesirup',$kodesirup)->get();
	    // passing data sirup yang didapat ke view.blade.php
	    return view('viewSirup',['sirup' => $sirup]);
    }

    // method untuk hapus data sirup
    public function hapus($kodesirup)
    {
        // menghapus data sirup berdasarkan id yang dipilih
        DB::table('sirup')->where('kodesirup',$kodesirup)->delete();
        // alihkan halaman ke halaman sirup
        return redirect('/sirup');
    }

    public function edit($kodesirup)
    {
        $sirup = DB::table('sirup')->where('kodesirup',$kodesirup)->get();
        return view('editSirup',['sirup' => $sirup]);

    }

    public function update(Request $request)
    {
        DB::table('sirup')->where('kodesirup',$request->kodesirup)->update([
            'merksirup' => $request->merksirup,
            'stocksirup' => $request->stocksirup,
            'tersedia' => $request->tersedia
        ]);

        // Redirect to the '/sirup' page
        return redirect('/sirup');
    }

}
