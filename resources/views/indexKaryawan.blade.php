@extends('masterKaryawan')
@section('title','Database karyawan')

@section('judul_halaman')
	<h3>Data Karyawan</h3>
	<br/>
	<br/>
    @endsection

    @section('konten')
	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
				<a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambahKaryawan"> + Tambah karyawan Baru</a>


    {{ $karyawan->links() }}

@endsection
