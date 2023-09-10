@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/card.css') }}">
@endsection

@section('titrePage', 'Home')

@section('contentMain')
<h1>My Collection</h1>
<section class="cards">
    @foreach ($collection as $nft)
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
            <form action="{{ route('nft.sell', $nft) }}" method="post">
                @csrf
                <button class="buy available" type="submit">SELL</button>
            </form>
        </div>
    </article>
    @endforeach
</section>
@endsection
