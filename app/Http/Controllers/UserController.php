<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function login(): View
    {
        return view('users.login');
    }

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
            $user->save();
            return redirect()->route('home')->with('success', 'user created successfully!');
        }else{
            echo "Error";
        }
    }
}
