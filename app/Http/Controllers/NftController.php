<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nft;
use App\Models\User;

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
            return redirect()->route('admin.list')->with('success', 'user created successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        $nft->delete();
        return redirect()->route('admin.list')->with('success', 'nft deleted !');
    }

    public function buy(Nft $nft)
    {
        if (auth()->check()){
            $user = auth()->user();
            $price = $nft->price;

            if ($user->wallet >= $price) {
                $user->wallet -= $price;
                $user->save();

                $nft->owner = $user->email;
                $nft->save();

                return redirect('/collection')->with('success', 'NFT buy qith success.');
            } else {
                return redirect('/home')->with('error', 'Not enough money.');
            }
        }else{
            return redirect('/home')->with('error', 'User not logged in.');
        }
    }

    public function sell(Nft $nft)
    {
        if (auth()->check()){
            $user = auth()->user();
            $price = $nft->price;

            $user->wallet += $price;
            $user->save();

            $nft->owner = null;
            $nft->save();
            return redirect('/collection')->with('success', 'Nft is no longer yours.');
        }else{
            return redirect('/home')->with('error', 'User not logged in.');
        }
    }
}
