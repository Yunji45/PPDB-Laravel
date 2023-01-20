@extends('layouts.app')
@section('content')
@auth
<nav class="navbar fixed-top navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand"><p>Welcome <b>{{ Auth::user()->name }}</b></p></a>
            <form class="d-flex">
            <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
            <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            </form>
        </div>
</nav>
@endauth
@endsection