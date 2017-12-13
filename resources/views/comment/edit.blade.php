@extends('layout.bs')
@section('pageTitle','Edit Comments')
@section('content')

@include('layout.errormsg')
<div class="row">
    <legend class="col-form-legend">Edit Comment</legend>
</div>
<form action="{{route('comments.store')}}" method="POST" class="form-group">
    {{csrf_field()}}
    <div class="form-group col-xs-12">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="form-group col-xs-12">
        <label for="Comment">Comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>    
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection


