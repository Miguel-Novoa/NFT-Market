<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Nft;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $nftsArray = nft::all();
        return view('home', compact('nftsArray'));
    }

    public function filter(Request $request)
    {
        $nfts = nft::all();
        $button = $request->input('filterBtn');
        $nftsArray = [];

        foreach($nfts as $nft){
            if($button === 'all'){
                $nftsArray[] = $nft;
            }else if($nft->category === $button){
                $nftsArray[] = $nft;
            }
        }
        return view('home', compact('nftsArray'));
    }
}
