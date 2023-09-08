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
        $nft = nft::all();
        return view('home', compact('nft'));
    }
}
