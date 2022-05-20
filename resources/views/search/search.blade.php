@extends('layouts.blog')


@section('header')
    <!-- Header -->
    @auth
        <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%); height: 350px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h2 class="animate__animated animate__fadeInDown">Search in our knowledge &  Find your answer!!!</h2>

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
                                <input type="text" required class="form-control" name="search" placeholder="Search">
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
                                <input type="text" required class="form-control" name="search" placeholder="Search">
                                <br>
                                <input type="submit" class="form-control">
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection


