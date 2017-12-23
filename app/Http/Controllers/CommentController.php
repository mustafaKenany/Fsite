<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $comments=Comment::where('id','>=','1')->orderby('id','desc')->paginate(2);
       return view('comment.index')->with('comments',$comments);
    }

    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required'
        ]);
        $c = new comment();
        $c->name=$request->input('name');
        $c->comment= $request->input('comment');
        $c->save();
        return redirect(route('comments.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = comment::find($id);
        return view('comment.show')->with('comment',$comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = comment::find($id);
        return view('comment.edit')->with('comment',$comment);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required'
        ]);
        $c = comment::find($id);
        $c->name=$request->input('name');
        $c->comment= $request->input('comment');
        $c->save();
        return redirect(route('comments.index'))->with('msg','Edited Done');

        // comment::where('id',$id)->update([
        //     'name'=>$request->input('name'),
        //     'comment'=>$request->input('comment')
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c = comment::find($id);
        $c->destroy($id);
        return redirect(route('comments.index'))->with('msg','Deleted Done');
    }
}
