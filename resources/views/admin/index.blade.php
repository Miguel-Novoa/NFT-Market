@extends('layouts.adminHeader')
@section('titrePage', 'Admin')

@section('contentMain')
<table>
    <thead>
        <th>email</th>
        <th>wallet</th>
        <th>nfts</th>
    </thead>
    <tbody>
        @foreach ($user as $user)
        <tr>
            <td>{{ $user->email }}</td>
            <td>{{ $user->wallet }} ETH</td>
            <td>2</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
