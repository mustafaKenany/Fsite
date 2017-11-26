<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContoller extends Controller
{
    public function index()
    {
        return 'hello world from laravel framework';
    }

    public function showID($id)
    {
        return 'YourID '.$id;
    }
}
