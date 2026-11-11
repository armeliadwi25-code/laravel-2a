<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="utf-8">
    <title>{{$judul}}</title>
</head>
<body>
    <!-- judul halaman, nilainya dikirim dari controller -->
    <h1>{{$judul}}</h1>

    <!-- form dikirim ke route POST /kalkulator/segitiga -->
    <form action="/kalkulator/segitiga" method="post">
        <!-- token keamanan wajib untuk form POST di Laravel -->
        @csrf
        <p>
            Alas <input type="text" name="alas" value="{{$alas}}">
            Tinggi <input type="text" name="tinggi" value="{{$tinggi}}">
        </p>
        <p><button type="submit">HITUNG</button></p>

        <!-- hasil perhitungan dari controller -->
        <h3>Luas = {{$hasil}}</h3>
    </form>
</body>
</html>