<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $user11 = [1,
            '<h1>Hello world</h1>'
            , 3, 4, 5];
        return view('welcome', [
            'user' => $user11
        ]);
    }
}
