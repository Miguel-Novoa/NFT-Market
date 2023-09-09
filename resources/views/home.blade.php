@extends('layouts.header')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/card.css') }}">
@endsection

@section('titrePage', 'Home')

@section('contentMain')
<ul class="filter">
    <li><button>All</button></li>
    <li><button>Collectible</button></li>
    <li><button>Metaverse</button></li>
    <li><button>Utility</button></li>
    <li><button>Online video game</button></li>
</ul>
<section class="cards">
    @foreach ($nft as $nft)
    <article class="card">
        <img src="{{ asset($nft->image) }}" alt="nftImage">
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

