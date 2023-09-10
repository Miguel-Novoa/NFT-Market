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
        @if ($nft->owner === null)
            <form class="buyForm" action="{{ route('nft.buy', $nft) }}" method="post">
                @csrf
                <button class="buy available" type="submit">BUY</button>
            </form>
            @else
            <button class="buy sold">SOLD</button>
        @endif
    </div>
</article>
@endsection
