<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    public function getsession(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo 'session not Found';
        }
    }

    public function setSession(Request $request)
    {
        return $request->session()->put('name','Mustafa');
        echo 'session Created';
    }

    public function destroySession(Request $request)
    {
        $request->session()->forget('name');
        echo 'Sestion Destroy';
    }
}
