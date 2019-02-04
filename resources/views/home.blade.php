@extends('app')
@section('content')
<a href="tambah" class="btn btn-info">Add New</a>
<hr/>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Surname</th>
        <th>Operations</th>
    </tr>
    </thead>
    <tbody>
    @if(count($teman))
    @foreach($teman as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->alamat}}</td>
        <td>
            <a href="perbarui/{{$data->id}}" class="btn btn-success btn-sm">Edit</a>
            <a href="hapus/{{$data->id}}" class="btn btn-warning btn-sm">Delete</a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
<hr/>
{!! $teman->links() !!}
@endsection