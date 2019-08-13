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

@endsection
