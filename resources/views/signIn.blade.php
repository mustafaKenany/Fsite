@extends('layout.main')
@section('PageTitle','SignIn Page');
@section('PageContent')
@if($errors->any())
<ul>
    @foreach($errors->all() as $e)
        <li>{{$e}}</li>
    @endforeach
</ul>
@endif

<form action="{{route('reg')}}" class="form-control" method="POST" enctype="multipart/form-data" >
{{csrf_field()}}
    <label for="UserName" class="form-control">UserName</label>
    <input type="text" name="UserName" id="UserName" class="form-control">
    <label for="Password" class="form-control">Password</label>
    <input type="password" name="Password" id="Password" class="form-control">
    <label for="email" class="form-control">email</label>
    <input type="text" name="email" id="email" class="form-control">
    <label for="image" class="form-control">image</label>
    <input type="file" name="image" id="image" class="form-control">
    <input type="submit" value="Submit">
</form>

@endsection
