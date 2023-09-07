@extends('layouts.header')

@section('titrePage', 'Login')

@section('contentMain')
<form action="" method="get">
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <button>Login</button>
    <a href="{{ route('users.register') }}">Register</a>
</form>
@endsection
