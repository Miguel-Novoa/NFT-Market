@extends('base')

@section('body')
<header>
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
    </a>
    <nav>
        <a href="{{ route('home') }}">List</a>
        <a href="{{ route('users.collection') }}">My Collection</a>
    </nav>
    @if (auth()->check())
    <p>{{ auth()->user()->wallet }}ETH</p>
    <a href="{{ route('users.logout') }}">Logout</a>
    @else
    <a href="{{ route('users.login') }}">Login</a>
    @endif
</header>
<main>
    @yield('contentMain')
</main>
@endsection
