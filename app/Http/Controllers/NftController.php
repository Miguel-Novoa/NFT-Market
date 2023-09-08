<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nft;

class NftController extends Controller
{
    public function store(Request $request)
    {
        $nft = new nft;
        $nft->title = $request->input('title');
        $nft->artist = $request->input('artist');
        $nft->owner = $request->input('owner');
        $nft->category = $request->input('category');
        $nft->token = $request->input('token');
        $nft->description = $request->input('description');
        $nft->contractUrl = $request->input('contract');
        $nft->price = $request->input('price');

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $nft->image = url('images/' . $imageName);
            $nft->save();
            return redirect()->route('admin.index')->with('success', 'user created successfully!');
        }
    }
}
