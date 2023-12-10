@extends('masterSirup')
@section('title','Database Sirup')

@section('judul_halaman')
	<h3>Database Sirup</h3>

    <a href="/sirup/tambahSirup"> + Tambah Database Sirup Baru</a>

    <p>Cari Database Sirup:</p>
	<form action="/sirup/cari" method="GET">
		<input class="form form-control" type="text" name="cari" placeholder="Cari Sirup Berdasarkan Merk ..." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br />
    <br />
    @endsection

    @section('konten')
        <table class="table table-striped table-hover">

            <tr>
                <th>Kode Sirup</th>
                <th>Merk</th>
                <th>Stock</th>
                <th>Ketersediaan</th>
                <th>Opsi</th>
            </tr>

        @foreach ($sirup as $s)
            <tr>
                <td>{{ $s->kodesirup }}</td>
                <td>{{ $s->merksirup }}</td>
                <td>{{ $s->stocksirup }}</td>
                @if($s->tersedia == 'Y')
                <td style="background-color: green; color: white; text-align: center">{{ $s->tersedia }}</td>
                @else
                <td style="background-color: red; color: white; text-align: center">{{ $s->tersedia }}</td>
                @endif
                <td>
                    <a href="/sirup/viewSirup/{{ $s->kodesirup }}" class="btn btn-success">View</a>
                    |
                    <a href="/sirup/editSirup/{{ $s->kodesirup }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sirup/hapusSirup/{{ $s->kodesirup }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach

        </table>

        {{ $sirup->links() }}

    @endsection
