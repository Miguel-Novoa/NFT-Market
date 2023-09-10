@extends('base')

@section('body')
<header>
    <nav>
        <a href="{{ route('admin.index') }}">
            <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
        </a>
        <a href="{{ route('admin.index') }}">Users</a>
        <a href="{{ route('admin.list') }}">NFT List</a>
        <a href="{{ route('admin.add') }}">Add NFT</a>
    </nav>
    @if (auth()->check())
        <a href="{{ route('admin.login') }}">Logout</a>
    @else
        <a href="{{ route('admin.login') }}">Login</a>
    @endif
</header>
<main>
    @yield('contentMain')
</main>
@endsection
