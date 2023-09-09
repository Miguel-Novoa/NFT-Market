@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@section('titrePage', 'Login')

@section('contentMain')
<form action="{{ route('users.authentificate') }}" method="post">
    @csrf
    <h1>NFT Market</h1>
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <button type="submit">Login</button>
    <a href="{{ route('users.register') }}" class="link">Register</a>
</form>
@endsection
