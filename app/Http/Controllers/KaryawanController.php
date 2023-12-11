<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
    	return view('indexKaryawan',['karyawan' => $karyawan]);

    }

    public function tambah(){
        // memanggil view tambah sirup
        return view('tambahKaryawan');
        }

    public function store(Request $request)
    {
        //error handling
        $this->validate($request, [
            'kodepegawai'=>'unique:karyawan,kodepegawai',
        ]);

	// insert data ke table karyawan
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
        'departemen' => $request->departemen
	]);
	// alihkan halaman ke halaman karyawan
	return redirect('/karyawan');
    }

    // method untuk hapus data karyawan
    public function hapus($kodepegawai)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('karyawan_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data karyawan ke view index
		return view('indexKaryawan',['karyawan' => $karyawan]);

	}

}


