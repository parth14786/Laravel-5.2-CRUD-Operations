@extends('app')
@section('content')
<form method="get" action="../edit/{{$teman->id}}">
<table class="table">
    <tr>
        <td>ID</td>
        <td><input type="text" name="id" class="form-control" value="{{$teman->id}}" disabled="disabled"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" class="form-control" value="{{$teman->nama}}"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" class="form-control" value="{{$teman->alamat}}"></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" value="Update" name="perbarui" class="btn btn-success">
            <input type="reset" value="Reset" name="reset" class="btn btn-danger">  
        </td>
    </tr>
</table>
</form>
@endsection