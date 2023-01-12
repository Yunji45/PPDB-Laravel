@extends('layouts.app')
@section('content')
@auth
<a class="navbar-brand"><p>Welcome <b>{{ Auth::user()->name }}</b></p></a>
@endauth
@endsection