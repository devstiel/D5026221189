@extends('masterKaryawan')

@section('konten')
	<h3>Tambah pada Database Karyawan</h3>

	<a href="/karyawan">< Kembali</a>

	<br/>
	<br/>

<form action="/karyawan/store" method="post">
    {{ csrf_field() }}

    {{-- kodepegawai --}}
    <div class = "form-group row">
        <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>
        <div class = "col-sm-8" {{ $errors->get('studentname') ? 'has-error' : '' }}>
            <input id="kodepegawai" name="kodepegawai" type = "text" class = "form-control" id = "kodepegawai" placeholder = "Masukkan Kode Pegawai (00000 - 99999)">
            @foreach($errors->get('kodepegawai') as $error)
            <span class="help-block">{{ $error }}</span>
            @endforeach
        </div>
    </div>
     {{-- kodepegawai --}}
     <div class = "form-group row">
        <label for = "namalengkap" class = "col-sm-2 control-label">Nama Lengkap</label>
        <div class = "col-sm-8">
            <input id="namalengkap" name="namalengkap" type = "text" class = "form-control" id = "namalengkap" placeholder = "Masukkan Nama Lengkap">
        </div>
    </div>
    {{-- divisi --}}
    <div class = "form-group row">
        <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
        <div class = "col-sm-8">
            <input id="divisi" name="divisi" type = "text" class = "form-control" id = "divisi" placeholder = "Masukkan Divisi">
        </div>
    </div>
    {{-- departemen --}}
    <div class = "form-group row">
        <label for = "departemen" class = "col-sm-2 control-label">Departemen</label>
        <div class = "col-sm-8">
            <input id="departemen" name="departemen" type = "text" class = "form-control" id = "divisi" placeholder = "Masukkan Departemen">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>

</form>

@endsection
