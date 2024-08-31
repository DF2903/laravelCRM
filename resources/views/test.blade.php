@extends('layouts.main.guest')
@section('content')
<div>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
@endsection