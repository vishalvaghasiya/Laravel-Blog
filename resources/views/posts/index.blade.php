@extends('layouts.app')

@section('container')
<div>
    <h1 class="text-uppercase text-center"> Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="container card card-header mb-5">
                <h3 class="card-header text-capitalize">
                    <a class="btn-link"
                       href="posts/{{$post->id}}">
                    {{$post->title}}
                    </a></h3>
                <small class="card-body"> {!! $post->body !!}</small>
            </div>
        @endforeach
{{--    paginate link() method to access  --}}
{{--            {{$posts->links()}}--}}
        @else
        <h1>No post Found</h1>
    @endif
</div>

    @endsection
