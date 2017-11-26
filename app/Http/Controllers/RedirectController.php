<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username='mustafa';
        $password = '123';
        if($username == $request->input('UserName') && $password == $request->input('Password'))
        {
            // return redirect('LoginOK');
            // return redirect(route('Login.ok'));
            return redirect()->action('RedirectController@ifLoginOK');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function ifLoginOK()
    {
        return view('LoginOK');
    }
}
