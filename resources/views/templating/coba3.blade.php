@extends('templating/master')

@section('konten')
ini materi
@if(count($datas))
<ul>
	@foreach($datas as $data)
		<li>{{$data}}</li>
	@endforeach
</ul>
@endif
@stop