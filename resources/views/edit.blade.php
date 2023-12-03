<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
               <input required="required" name="nama" type = "text" class = "form-control" id = "firstname" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input required="required" name="jabatan" type = "text" class = "form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-8">
               <input required="required" name="umur" type = "number" class = "form-control" id = "umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8">
               <textarea required="required" name="alamat" class = "form-control" id = "alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
	@endforeach


</body>
</html>
@endsection
