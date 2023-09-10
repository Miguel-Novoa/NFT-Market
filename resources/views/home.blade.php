@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/card.css') }}">
@endsection

@section('titrePage', 'Home')

@section('contentMain')
<form action="{{ route('home.filter') }}" method="post">
    @csrf
    <ul class="filter">
        <li>
            <button name="filterBtn" value="all" type="submit">All</button>
        </li>
        <li>
            <button name="filterBtn" value="collectible" type="submit">Collectible</button>
        </li>
        <li>
            <button name="filterBtn" value="metaverse" type="submit">Metaverse</button>
        </li>
        <li>
            <button name="filterBtn" value="utility" type="submit">Utility</button>
        </li>
        <li>
            <button name="filterBtn" value="online video game" type="submit">Online video game</button>
        </li>
    </ul>
</form>
<section class="cards">
    @foreach ($nftsArray as $nft)
    <article class="card">
        <a href="{{ route('nft.show', $nft) }}">
            <img src="{{ asset($nft->image) }}" alt="nftImage">
        </a>
        <div class="details" role="region">
            <section class="firstLine">
                <h2 class="name">{{$nft->title}}</h2>
                <span class="category">{{$nft->category}}</span>
            </section>
            <p class="price">{{$nft->price}} ETH</p>
            @if ($nft->owner === null)
            <form action="{{ route('nft.buy', $nft) }}" method="post">
                @csrf
                <button class="buy available" type="submit">BUY</button>
            </form>
            @else
            <button class="buy sold">SOLD</button>
            @endif
        </div>
    </article>
    @endforeach
</section>
@endsection

