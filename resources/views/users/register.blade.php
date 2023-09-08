@extends('layouts.header')

@section('titrePage', 'Register')
@section('contentMain')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password...">
    <button>Register</button>
</form>
<a href="{{ route('users.login') }}">Login</a>
@endsection
