@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>

<form method="post" action="/employe/{{$employe->id}}">
    @method('put')
    @csrf
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{$employe->nama}}" style="width: 200px;"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2">{{$employe->alamat}}</textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender">
                    <option value="L" {{$employe->gender === 'L' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="P" {{$employe->gender === 'P' ? 'selected' : ''}}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" value="{{$employe->gaji}}" style="width: 200px;"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">UPDATE</button></td>
        </tr>
    </table>
</form>
@endsection