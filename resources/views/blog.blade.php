<!DOCTYPE html>
<html>
    <head>
        <title> Tutorial Larabel = www.malasngoding.com </title>
    </head>

    <body>
        <h3> www.malasngoding.com </h3>
        <p>Seri Tutorial Laravel Lengkap Dari Dasar!</p>
        <p>Ini adalah view blog. ada di note Blog</p>
        <p>
            Nama    : {{$nama}} <br>
            Alamat  : {{$alamat}} <br>
            Umur    : {{$umur}}
        </p>
        <a href="/pegawai/{{date('d m Y')}}"> klik di sini </a>
    </body>
</html>
