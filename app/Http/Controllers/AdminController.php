<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
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

    public function authentificate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            if(auth()->user()->isAdmin){
                $request->session()->regenerate();

                return redirect('/admin');
            }
        }

        return redirect()->route('admin.login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
