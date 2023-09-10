@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/nft.css') }}">
@endsection

@section('titrePage', 'Home')

@section('contentMain')
<article class="card">
    <img src="{{ asset($nft->image) }}" alt="nftImage">
    <div class="details" role="region">
        <section class="firstLine">
            <h2 class="name">{{$nft->title}} by {{ $nft->artist }}</h2>
            <span class="category">{{$nft->category}}</span>
        </section>
        <p class="description">{{ $nft->description }}</p>
        <p class="price">{{$nft->price}} ETH</p>
        @auth
            @if (auth()->user()->wallet < $nft->price)
                <button class="buy sold">BUY</button>
            @elseif($nft->owner === null)
                <form action="{{ route('nft.buy', $nft) }}" method="post">
                @csrf
                    <button class="buy available" type="submit">BUY</button>
                </form>
            @else
                <button class="buy sold">SOLD</button>
            @endif
        @else
            <button class="buy sold">BUY</button>
        @endauth
    </div>
</article>
@endsection
