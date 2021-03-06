@extends('layouts.blog')

@section('title')
    {{$post->title}}
@endsection
@section('xx')
    {{'text-danger'}}
@endsection

@section('header')
    <header class="header text-white h-fullscreen pb-80" style="background-image:url('../../../public/storage/{{$post->image}}') ;" data-overlay="9">
        <div class="container text-center">

            <div class="row h-100">
                <div class="col-lg-8 mx-auto align-self-center">

                    <p class="opacity-70 text-uppercase small ls-1">{{$post->category->name}}</p>
                    <h1 class="display-4 mt-7 mb-8">{{$post->title}}</h1>
                    <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">{{$post->user->name}}</a></p>
{{--                    <p><img class="avatar avatar-sm" src="{{Gravatar::src($post->user->email)}}" alt="..."></p>--}}

                </div>

                <div class="col-12 align-self-end text-center">
                    <a class="scroll-down-1 scroll-down-white d-inline-block"  href="#section-content"><span style="margin: auto"></span></a>
                </div>

            </div>

        </div>
    </header><!-- /.header -->
@endsection

@section('content')
    <main class="main-content">


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Blog content
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section" id="section-content" style="text-align: center; align-items: center">
            <div class="container">
                    <div>
                        <img class="card-img-top" src="/images/posts/{{$post->image}}" alt="{{$post->image}}">
                    </div>
                <div style="font-size: 30px;">
                    {{$post->body}}

                </div>
               <div class="row">
                        <div class="gap-xy-2 mt-6" style="margin-left: 50%;transform: translateX(-50%)">
                                <a class="badge badge-pill badge-secondary" href="#">{{$post->tages}}</a>
                        </div>

                    </div>
                </div>
            </div>



        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->



    </main>
@endsection
