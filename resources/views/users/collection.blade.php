@extends('layouts.header')
@section('titrePage', 'Home')

@section('contentMain')
<section>
    @foreach ($collection as $nft)
    <article class="card">
        <figure>
            <img src="{{ asset($nft->image) }}" alt="nft">
            <figcaption class="card-caption">nft description</figcaption>
        </figure>
        <section>
            <ul>
                <li>{{$nft->title}}</li>
                <li>{{$nft->category}}</li>
            </ul>
            <p>{{$nft->price}} ETH</p>
        </section>
        <form action="{{ route('nft.sell', $nft) }}" method="post">
            @csrf
            <button type="submit">SELL</button>
        </form>
    </article>
    @endforeach
</section>
@endsection
