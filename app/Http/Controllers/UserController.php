<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Nft;
class UserController extends Controller
{
    /**
     * Redirect to login page.
     */
    public function login(): View
    {
        return view('users.login');
    }

    /**
     * Redirect to register page.
     */
    public function register(): View
    {
        return view('users.register');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new user;
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $confirmPassword = $request->input('confirmPassword');

        if($user->password === $confirmPassword){
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->route('home')->with('success', 'user created successfully!');
        }else{
            echo "Error";
        }
    }

    /**
     * Authentificate user.
     */
    public function authentificate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }

    /**
     * Logout user.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }

    /**
     * Redirect to user's collection page.
     */
    public function collection()
    {
        $user = auth()->user();
        $nfts = Nft::all();
        $collection = [];

        if (Auth::check()) {
            foreach ($nfts as $nft) {
                if ($nft->owner === $user->email) {
                    $collection[] = $nft;
                }
            }
        }

        return view('users.collection', compact('collection'));
    }
}
