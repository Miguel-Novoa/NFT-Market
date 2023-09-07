@extends('base')

@section('body')
<header>
    <a href="{{ route('admin.index') }}">
        <img src="{{ asset('images/nft-market-logo.jpg') }}" alt="logo">
    </a>
    <nav>
        <a href="{{ route('admin.index') }}">Users</a>
        <a href="{{ route('admin.list') }}">NFT List</a>
        <a href="{{ route('admin.add') }}">Add NFT</a>
    </nav>
    <a href="{{ route('admin.login') }}">Login</a>
</header>
<main>
    @yield('contentMain')
</main>
@endsection
