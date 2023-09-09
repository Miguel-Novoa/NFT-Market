@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@section('titrePage', 'Register')
@section('contentMain')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <h1>NFT Market</h1>
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password...">
    <button>Register</button>
    <a href="{{ route('users.login') }}" class="link">Login</a>
</form>
@endsection
