<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype_id;

        if ($usertype == 1) {
            return view('dashboard.index');
        } else {
            return view('home');
        }
    }
}
