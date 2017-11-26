@extends('layout.main')

@section('PageTitle','Login Page');
@section('PageContent')

<form action="/login" class="form-control" method="POST">
{{csrf_field()}}
    <label for="UserName" class="form-control">UserName</label>
    <input type="text" name="UserName" id="UserName" class="form-control">
    <label for="Password" class="form-control">Password</label>
    <input type="password" name="Password" id="Password" class="form-control">
    <input type="submit" value="Submit">
</form>

@endsection