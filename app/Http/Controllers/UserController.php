<?php

namespace App\Http\Controllers;

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
}
