<!DOCTYPE html>
<html>
<head>
	<title>Mengubah Database Sirup </title>
</head>
<body>
@extends('masterSirup')

@section('konten')
	<h3>Edit Sirup</h3>

	<br/>

	@foreach($sirup as $s)
	<form action="/sirup/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="kodesirup" value="{{ $s->kodesirup }}"> <br/>
        <div class = "form-group">
            <label for = "merksirup" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-8">
               <input required="required" name="merksirup" type = "text" class = "form-control" id = "merksirup" value="{{ $s->merksirup }}">
            </div>
        </div>

        <div class = "form-group">
            <label for = "stocksirup" class = "col-sm-2 control-label">Stock</label>
            <div class = "col-sm-8">
               <input required="required" name="stocksirup" type = "text" class = "form-control" id = "stocksirup" value="{{ $s->stocksirup }}">
            </div>
        </div>

        <div class = "form-group">
            <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
            <div class = "col-sm-8">
               <textarea required="required" name="tersedia" class = "form-control" id = "tersedia">{{ $s->tersedia }}</textarea>
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
