<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Nft;

class AdminController extends Controller
{
    public function index(): View
    {
        $user = user::all();
        return view('admin.index', compact('user'));
    }

    public function login(): View
    {
        return view('admin.login');
    }

    public function list(): View
    {
        $nft = nft::all();
        return view('admin.list', compact('nft'));
    }

    public function add(): View
    {
        return view('admin.add');
    }
}
