@extends('app')
@section('content')
<div class="container">
    @foreach ($users as $user)
        {{ $user->nama }}
    @endforeach
</div>

{!! $users->links() !!}
</table>
@endsection