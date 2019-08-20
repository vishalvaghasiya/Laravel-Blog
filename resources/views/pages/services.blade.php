@extends('layouts.app')

@section('container')
    <div class="banner-innerpage" style="background-image:url({{asset('images/innerpage/banner-bg.jpg')}})">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                    <h1 class="title">About WrapKit</h1>
                    <h6 class="subtitle op-8">We are Small Team of Creative People working together</h6></div>
                <h1> Welcom to Laravel {{$titles}}</h1>
                <!-- Column -->
            </div>
        </div>
    </div>
    @endsection
