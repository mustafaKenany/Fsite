<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class CookiesController extends Controller
{
    public function setcookie()
    {
        Cookie::queue(Cookie::make('language','arabic','60'));
        echo "Cookie Created";
    }

    public function getcookie()
    {
        if(Cookie::has('language'))
        {
            echo Cookie::get('language');
        }
        else
        {
            echo "Cookies not found";
        }
    }
}
