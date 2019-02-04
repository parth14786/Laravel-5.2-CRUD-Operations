@extends('app')
@section('content')
<form method="get" action="simpan">
<table class="table">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Surname</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" value="Add" name="simpan" class="btn btn-success">
			<input type="reset" value="Reset" name="reset" class="btn btn-danger">	
		</td>
	</tr>
</table>
</form>
@endsection