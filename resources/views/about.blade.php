<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<style>
    body{
        background-color: cyan;
    }
    .tabel{
        border-style: groove;
        border-width: 10px;
        width: 280px;
    }
</style>
<body>
    <h1>Halaman ABOUT</h1>
    <h3>Biodata Saya</h3>
    <div class="tabel">
        NIM : {{$nim}}
        <br>
        NAMA : {{$nama}}
        <br>
        ALAMAT : {{$alamat}}
        <br>
        EMAIL : {{$email}}
        <br>
        NOHP : {{$nohp}}
    </div>
</body>
</html>