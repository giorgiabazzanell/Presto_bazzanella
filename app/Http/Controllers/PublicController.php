<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function privacyPolicy()
    {
        return view('legal.privacy-policy');
    }

    public function cookiePolicy()
    {
        return view('legal.cookie-policy');
    }
}
