@extends('layouts.header')

@section('titrePage', 'Login')

@section('contentMain')
<form action="{{ route('users.authentificate') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <button type="submit">Login</button>
</form>
<a href="{{ route('users.register') }}">Register</a>
@endsection
