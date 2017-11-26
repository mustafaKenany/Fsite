<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validatecontroller extends Controller
{
    public function showForm()
    {
        return view('signIn');
    }

    public function validsubmit(Request $req)
    {
        $msgs = [
            'required'=>'Forget field'
        ];
        $this->validate($req,
        [
            'UserName'=>'required',
            'Password'=>'required',
            'email'=>'required|email',
            'image'=>'nullable|image'
        ],$msgs);

        if($req->hasFile('image'))
        {
            $fileObj = $req->file('image');
            // $imgext = $fileObj->getClientOrginalExtenstion();
            $imgName = $fileObj->getClientOriginalName();
            $imgSize = $fileObj->getClientSize();
            $path = $fileObj->store('mustafa');
        }
        return $path;
    }
}
