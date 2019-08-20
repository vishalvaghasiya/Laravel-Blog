@extends('layouts.app')

@section('container')
    <h1 style="margin-top: 0px"> Posts Create</h1>

{{--    {{ Form::open(array('action' => 'PostsController@store')) }}--}}
    {{ Form::open(['action' => 'PostsController@store' , 'method' => 'POST']) }}
    <div class="form-group">
        {{Form::label('title' , 'Title')}}
        {{Form::text('title', '' , ['class' => 'form-control' , 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', '', ['id'=>'article-ckeditor' , 'class'=>'form-control' , 'placeholder' => 'Body'])}}
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {{ Form::close() }}

@endsection
