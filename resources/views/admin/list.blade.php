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
            <td>
                <form action="{{ route('nft.destroy', $nft) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                    onclick="return confirm('Etes vous certain de vouloir supprimer cet enregistrement ?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
