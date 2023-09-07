@extends('layouts.header')
@section('titrePage', 'Home')

@section('contentMain')
<ul>
    <li><button>All</button></li>
    <li><button>Collectible</button></li>
    <li><button>Metaverse</button></li>
    <li><button>Utility</button></li>
    <li><button>Online video game</button></li>
</ul>
<section>
    <article class="card">
        <figure>
            <img src="{{ asset('images/nft-01.jpg') }}" alt="nft">
            <figcaption class="card-caption">nft description</figcaption>
        </figure>
        <section>
            <ul>
                <li>TITLE</li>
                <li>CATEGORY</li>
            </ul>
            <p>0.0025 ETH</p>
        </section>
        <button>BUY</button>
    </article>
</section>
@endsection

