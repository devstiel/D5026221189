@extends('master2')
@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
               <input name="nama" type = "text" class = "form-control" id = "firstname" placeholder = "Masukkan Nama Pegawai">
               <input required="required" name="nama" type = "text" class = "form-control" id = "firstname" placeholder = "Masukkan nama pegawai">
            </div>
         </div>
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
        </div>
        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input required="required" name="jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukkan jabatan">
            </div>
        </div>
        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-8">
               <input required="required" name="umur" type = "number" class = "form-control" id = "umur" placeholder = "Masukkan umur">
            </div>
        </div>
        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8">
               <textarea required="required" name="alamat" class = "form-control" id = "alamat" placeholder = "Masukkan alamat"></textarea>
            </div>
        </div>
        <div class = "form-group">
            <div class = "col-sm-8">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
@endsection
