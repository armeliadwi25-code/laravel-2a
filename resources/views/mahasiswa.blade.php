<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
</head>
<body>
    <h1 align="center">{{ $judul }}</h1>
    <table border="1" align="center" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
        </tr>
        @foreach ($mahasiswa as $row)
        <tr>
            <td>{{ $row['nama'] }}</td>
            <td>{{ $row['alamat'] }}</td>
            <td>{{ $row['gender'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>