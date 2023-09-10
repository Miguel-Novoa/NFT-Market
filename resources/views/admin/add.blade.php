@extends('layouts.adminHeader')

@section('blockCSS')
<link rel="stylesheet" href="{{ mix('css/add.css') }}">
@endsection

@section('titrePage', 'Add')
@section('contentMain')
<form action="{{ route('nft.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h1>ADD NFT</h1>
    <input type="text" name="title" id="title" placeholder="Title...">
    <input type="text" name="artist" id="artist" placeholder="Artist...">
    <input type="text" name="owner" id="owner" placeholder="Owner...">
    <select name="category" id="category">
        <option value="">--Please choose an option--</option>
        <option value="collectible">Collectible</option>
        <option value="metaverse">Metaverse</option>
        <option value="online video game">Online video game</option>
        <option value="utility">Utility</option>
    </select>
    <select name="token" id="token">
        <option value="">--Please choose an option--</option>
        <option value="ERC-721">ERC-721</option>
        <option value="ERC-1155">ERC-1155</option>
        <option value="ERC-998">ERC-998</option>
    </select>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description..."></textarea>
    <input type="text" name="contract" id="contract" placeholder="Contract URL...">
    <input type="text" name="price" id="price" placeholder="Price...">
    <label for="image">Upload NFT</label>
    <input type="file" name="image" id="image" accept="image/*">
    <button>ADD NFT</button>
</form>
@endsection
