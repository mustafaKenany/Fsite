@extends('layout.bs')
@section('pageTitle','Edit Comments')
@section('content')

@include('layout.errormsg')
<div class="row">
    <legend class="col-form-legend">Edit Comment</legend>
</div>
<form action="{{route('comments.update',$comment->id)}}" method="POST" class="form-group">
<input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}
    <div class="form-group col-xs-12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$comment->name}}">
    </div>
    <div class="form-group col-xs-12">
        <label for="Comment">Comment</label>
        <textarea class="form-control" id="comment" name="comment"  rows="3">
        {{$comment->comment}}
        </textarea>    
    </div>
    <button type="submit" class="btn btn-success">update</button>
</form>
@endsection


