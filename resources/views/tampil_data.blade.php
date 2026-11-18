@extends('dashboard')

@section('content')
<h1>{{$judul}}</h1>
<p align="center"><a href="/employe/create"><button>+ Tambah Data</button></a></p>

<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
    @foreach ($employes as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->nama}}</td>
        <td>{{$row->alamat}}</td>
        <td>{{$row->gender}}</td>
        <td>{{$row->gaji}}</td>
        <td>
            <button><a href="/employe/edit/{{$row->id}}"><button>Edit</button></a> | <button>Delete</button></button> | <button>Delete</button>
        </td>
    </tr>
    @endforeach
</table>
@endsection