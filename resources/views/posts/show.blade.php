@extends('layout.app')

@section('container')
    <a href="{{url("/posts")}}" class="btn btn-dark"> Go Back</a>
    <div class="container card card-header mt-5">
        <h1 class="text-capitalize text-danger">{{$posts->title}}</h1>
        <div>{{$posts->body}}</div>
        <small>{{$posts->created_at}}</small>

    </div>
    <hr>
    <a href="/posts/{{$posts->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {{--    <a href="/posts/{{$posts->id}}/destroy" class="btn btn-dark"> Delete</a>--}}

    {!! Form::open(['action' => ['PostsController@destroy' , $posts->id] , 'method'=>'POST' , 'class'=> 'pull-right' ]) !!}
    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection

