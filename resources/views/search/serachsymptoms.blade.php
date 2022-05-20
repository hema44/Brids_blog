@extends('layouts.blog')


    @section('header')
        <!-- Header -->
        @auth
            <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%); height: 350px;">
                <div class="container">

                    <div class="row">
                        <div class="col-md-8 mx-auto">

                            <h1>Latest brides Posts</h1>
                            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

                        </div>
                    </div>

                </div>
            </header><!-- /.header -->
        @endauth
    @endsection

    @section('content')
        <!-- Main Content -->

            <main class="main-content">
                <div class="section bg-gray">
                    <div class="container">
                        <div class="row" data-aos="slide-up">
                            <div class="col-md-4 col-xl-3">
                                <div class="sidebar px-4 py-md-0">

                                    <h6 class="sidebar-title">Search by disease</h6>
                                    <form  action="/search-disease" method="post">
                                        @csrf
                                        <select name="cat" class="form-control" required>
                                            <option value="" disabled selected>select category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <input type="text" class="form-control" name="search" placeholder="Search" required>
                                        <br>
                                        <input type="submit" class="form-control">
                                    </form>
                                </div>
                                <hr>
                                <div class="sidebar px-4 py-md-0">

                                    <h6 class="sidebar-title">Search by symptoms</h6>
                                    <form  action="/search-symptoms" method="post">
                                        @csrf
                                        <select name="cat" class="form-control" required>
                                            <option value="" disabled selected>select category</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <input type="text" class="form-control" name="search" placeholder="Search" required>
                                        <br>
                                        <input type="submit" class="form-control">
                                    </form>
                                </div>

                            </div>


                            <div class="col-md-8 col-xl-9">
                                <div class="row gap-y">
                                    <h2 class="col-12"> diseases may be one of them : </h2>
                                @foreach($disease as $d)
                                        <p class="col-3">{{$d->name}}</p>
                                    @endforeach
                                </div>
                                <div class="row">
                                    <h2>Treatment Posts </h2>
                                </div>
                                <div class="row gap-y">
                                    @forelse($posts as $post)
                                        <div class="col-md-6">
                                            <div class="card border hover-shadow-6 mb-6 d-block">
                                                <a href="{{route('blog.show', $post->id)}}"><img class="card-img-top" style="height: 12rem" src="images/posts/{{$post->image}}" alt="{{$post->image}}"></a>
                                                <div class="p-6 text-center">
                                                    <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" >{{$post->category->name}}</a></p>
                                                    <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <p class="text-center">No result found for </p>
                                    @endforelse

                                </div>

                                {{$posts->links()}}

                            </div>
                        </div>
                    </div>
                </div>
            </main>

    @endsection


