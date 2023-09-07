@extends('base')

@section('body')
<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
    </a>
    <nav>
        <a href="">List</a>
        <a href="">My Collection</a>
    </nav>
    <p>150 ETH</p>
    <a href="{{ route('users.login') }}">Login</a>
</header>
<main>
    @yield('contentMain')
</main>
@endsection
