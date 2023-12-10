@extends('masterSirup')

@section('konten')
	<h3>Tambah pada Database Sirup</h3>

	<a href="/sirup">< Kembali</a>

	<br/>
	<br/>

<form action="/sirup/store" method="post">
    {{ csrf_field() }}

    {{-- Merk --}}
    <div class = "form-group row">
        <label for = "merksirup" class = "col-sm-2 control-label">Merk</label>
        <div class = "col-sm-8">
            <input id="merksirup" name="merksirup" type = "text" class = "form-control" id = "merksirup" placeholder = "Masukkan Merk">
        </div>
    </div>
    {{-- stocksirup --}}
    <div class = "form-group row">
        <label for = "stocksirup" class = "col-sm-2 control-label">Stock</label>
        <div class = "col-sm-8">
            <input id="stocksirup" name="stocksirup" type = "number" class = "form-control" id = "stocksirup" placeholder = "Masukkan stocksirup">
        </div>
    </div>
    {{-- tersedia --}}
    <div class = "form-group row">
        <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
        <div class = "col-sm-8">
            <input id="tersedia" name="tersedia" type = "text" class = "form-control" id = "tersedia" placeholder = "Masukkan tersedia">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

</form>

@endsection
