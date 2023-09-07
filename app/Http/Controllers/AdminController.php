<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function login(): View
    {
        return view('admin.login');
    }

    public function list(): View
    {
        return view('admin.list');
    }

    public function add(): View
    {
        return view('admin.add');
    }
}
