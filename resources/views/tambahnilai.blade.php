@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah">< Kembali</a>

	<br/>
	<br/>

<form action="/nilaikuliah/tambahnilai" method="post">
    {{ csrf_field() }}
    {{-- JABATAN --}}
    <div class = "form-group row">
        <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
        <div class = "col-sm-8">
            <input name="NRP" type = "text" class = "form-control" id = "NRP" placeholder = "Masukkan NRP">
        </div>
    </div>
    {{-- UMUR --}}
    <div class = "form-group row">
        <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
        <div class = "col-sm-8">
            <input name="NilaiAngka" type = "number" class = "form-control" id = "NilaiAngka" placeholder = "Masukkan Nilai Angka">
        </div>
    </div>
    {{-- ALAMAT --}}
    <div class = "form-group row">
        <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
        <div class = "col-sm-8">
            <input name="SKS" type = "text" class = "form-control" id = "SKS" placeholder = "Masukkan SKS">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

</form>

@endsection
