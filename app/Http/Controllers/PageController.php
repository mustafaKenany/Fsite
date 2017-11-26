<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('sections.contact');
    }

    public function services()
    {
        return view('sections.services');
    }

    public function get($id)
    {
        $name = 'Mustafa';
        return view('pages.get')->with(
            [
                'pageID'=>$id,
                'PageName'=>$name
            ]

        );
    }
}
