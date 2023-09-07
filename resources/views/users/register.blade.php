@extends('layouts.header')

@section('titrePage', 'Register')
@section('contentMain')
<form action="" method="post">
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <input type="password" name="confirm password" id="confirmPassword" placeholder="Confirm password...">
    <button>Register</button>
    <a href="{{ route('users.login') }}">Login</a>
</form>
@endsection
