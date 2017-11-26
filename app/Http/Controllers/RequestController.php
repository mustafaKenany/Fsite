<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function ViewRequest(Request $request)
    {
        return $request->url();
    }

    public function login(Request $request)
    {
        return $request->all();
    }

    public function showLoginForm()
    {
        return view('login');
    }
}
