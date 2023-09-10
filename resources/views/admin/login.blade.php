@extends('layouts.adminHeader')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/login.css') }}">
@endsection

@section('titrePage', 'Login')

@section('contentMain')
<form action="{{ route('admin.authentificate') }}" method="post">
    @csrf
    <input type="email" name="email" id="email" placeholder="Username...">
    <input type="password" name="password" id="password" placeholder="Password...">
    <button type="submit">Login</button>
</form>
@endsection
