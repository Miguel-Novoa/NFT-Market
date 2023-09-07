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
        <td>nft luffy</td>
        <td>Eichiro Oda</td>
        <td>Miguel</td>
        <td>16 ETH</td>
        <td>Collectible</td>
        <td><button>DELETE</button></td>
    </tbody>
</table>
@endsection
