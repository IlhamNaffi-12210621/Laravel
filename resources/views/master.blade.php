<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>
{{-- <style>
    body{
        background-color: cyan;
    }
    .tabel{
        border-style: groove;
        border-width: 10px;
        width: 280px;
    }
</style> --}}
<body>
    <h1>Tampilan Data Anggota</h1>
    <a href="http://"> Tambah Data Anggota</a>

    <table border="2">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>

        @foreach ($anggota as $a)
        <tr>
            <td>{{$a->NIM}}</td>
            <td>{{$a->nama}}</td>
            <td>{{$a->kelas}}</td>
            <td>{{$a->alamat}}</td>
            <td>{{$a->email}}</td>

            <td>
                <a href="http://">edit</a>
                <a href="http://">hapus</a>
            </td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>