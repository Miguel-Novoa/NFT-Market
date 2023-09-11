<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Nft;
use App\Models\User;

class NftController extends Controller
{

    /**
     * Store the specified resource.
     */
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
            'title' => 'required|string|max:100',
            'artist' => 'required|string',
            'category' => 'required',
            'token' => 'required',
            'description' => 'required|string|max:255',
            'contractUrl' =>'required',
            'price' => 'required'
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
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        if($nft->owner === null){
            $nft->delete();
            return redirect()->route('admin.list')->with('success', 'nft deleted !');
        }else{
            return redirect()->route('admin.list')->with('Error', 'nft has an owner !');
        }
    }

    /**
     * Check if user as enough money to buy nft, then add the nft to the user collection.
     */
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

    /**
     * Remove the nft from the user collection. Add the nft price to the user wallet.
     * The nft is then available in the market.
     */
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

    /**
     * Redirect to the nft details page.
     */
    public function show(Nft $nft):View
    {
        return view('users.nft', compact('nft'));
    }
}
