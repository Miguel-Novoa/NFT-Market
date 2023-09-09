@extends('base')

@section('body')
<header>
    <nav>
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
        </a>
        <a href="{{ route('home') }}">List</a>
        <a href="{{ route('users.collection') }}">My Collection</a>
    </nav>
    @if (auth()->check())
    <section class="headerEnd">
        <p class="wallet">{{ auth()->user()->wallet }} ETH</p>
        <a href="{{ route('users.logout') }}">Logout</a>
    </section>
    @else
    <a href="{{ route('users.login') }}">Login</a>
    @endif
</header>
<main>
    @yield('contentMain')
</main>
@endsection
