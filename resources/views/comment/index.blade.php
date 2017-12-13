@extends('layout.bs')
@section('pageTitle','Comments')

@section('content')

@if(count($comments) >0)

    @foreach($comments as $comment)
    <div class="well">
        <div class="row">
            <div class="col-xs|sm-12 col-lg-6">
                {{$comment->created_at}}
            </div>
            <div class="col-xs|sm-12 col-lg-6">
                {{$comment->name}}
                <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-info pull-right">Edit</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs|sm-12 col-lg-6">
               <a href="{{route('comments.show',$comment->id)}}"> 
                    {{$comment->comment}} 
               </a>
            </div>
        </div>
    </div>
    @endforeach
{{$comments->links()}}
@endif
@endsection