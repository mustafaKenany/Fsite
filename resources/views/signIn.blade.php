@extends('layout.bs')
@section('pageTitle','SignIn Page');
@section('content')
@include('layout.errormsg')
<form action="{{route('reg')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group col-md-6 col-xs-12">
        <label for="UserName">UserName</label>
        <input type="text" name="UserName" id="UserName" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="Passwrod">Passwrod</label>
        <input type="password" name="Passwrod" id="Passwrod" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group col-md-6">
        <label for="image">image</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button></form>
@endsection
