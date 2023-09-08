@extends('layouts.adminHeader')
@section('titrePage', 'List')

@section('contentMain')
<table>
    <thead>
        <th>title</th>
        <th>artist</th>
        <th>owner</th>
        <th>price</th>
        <th>category</th>
        <th></th>
    </thead>
    <tbody>
        @foreach ($nft as $nft)
        <tr>
            <td>{{ $nft->title }}</td>
            <td>{{ $nft->artist }}</td>
            <td>{{ $nft->owner }}</td>
            <td>{{ $nft->price }}ETH</td>
            <td>{{ $nft->category }}</td>
            <td><button>DELETE</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
