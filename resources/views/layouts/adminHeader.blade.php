@extends('base')

@section('body')
<header>
    <nav>
        <a href="{{ route('admin.index') }}" class="navImg">
            <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
        </a>
        <a class="navLink" href="{{ route('admin.index') }}">Users</a>
        <a class="navLink" href="{{ route('admin.list') }}">NFT List</a>
        <a class="navLink" href="{{ route('admin.add') }}">Add NFT</a>
    </nav>
    @if (auth()->check())
        <a class="navLink" href="{{ route('admin.login') }}">Logout</a>
    @else
        <a class="navLink" href="{{ route('admin.login') }}">Login</a>
    @endif
</header>
<main>
    @yield('contentMain')
</main>
@endsection
