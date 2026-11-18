@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>

<form method="post" action="/employe/store">
    @csrf
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" style="width: 200px;"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2"></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" style="width: 200px;"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">SIMPAN</button></td>
        </tr>
    </table>
</form>
@endsection