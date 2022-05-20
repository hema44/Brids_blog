@extends('layouts.blog')


@section('header')
    <!-- Header -->
    @auth
        <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%); height: 350px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h1 class="animate__animated animate__fadeInDown" >welcome {{auth()->user()->name}}</h1>
                        <p class="lead-2 opacity-90 mt-6 animate__animated animate__backInRight animate__delay-1s">Read and get updated on how we progress</p>

                    </div>
                </div>

            </div>
        </header><!-- /.header -->
    @endauth
    @guest
        <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h1 class="animate__animated animate__fadeInDown" >Welcome sir </h1>
                        <p class="lead-2 opacity-90 mt-6 animate__animated animate__backInRight animate__delay-1s">sing up to get all knowlage</p>

                    </div>
                </div>

            </div>
        </header><!-- /.header -->
    @endguest
@endsection

@section('content')
    <!-- Main Content -->
    @auth
        <main class="main-content">
            <div class="section bg-gray" >
                <div class="container" >
                    <div class="row ">


                        <div class="col-md-8 col-xl-9" data-aos="slide-up" >
                            <div class="row gap-y ">

                                @forelse($posts as $post)
                                    <div class="col-md-6">
                                        <div class="card border hover-shadow-6 mb-6 d-block">
                                            <a href="{{route('blog.show', $post->id)}}"><img class="card-img-top" style="height: 12rem" src="images/posts/{{$post->image}}" alt="{{$post->image}}"></a>
                                            <div class="p-6 text-center">
                                                <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="">{{$post->category->name}}</a></p>
                                                <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-center">No result found for <strong>{{request()->query('search')}}</strong></p>
                                @endforelse

                            </div>

                            {{$posts->links()}}

                        </div>



                        <div class="col-md-4 col-xl-3" data-aos="slide-up" data-aos-delay="1000">
                            <div class="sidebar px-4 py-md-0">

                                <h6 class="sidebar-title">Search</h6>
                                <form class="input-group" action="{{route('welcome')}}" method="GET">
                                    <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
                                </form>

                                <hr>

                                <h6 class="sidebar-title">Categories</h6>
                                <div class="row link-color-default fs-14 lh-24">
                                    @foreach($categories as $category)
                                        <div class="col-3">
                                            <a class="badge badge-secondary">
                                                {{$category->name}}
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <hr>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    @endauth
    @guest
        <section class="container-fluid m-0 p-0">
            <div id="carouselExampleCaptions" class="carousel slide"  data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active " data-aos="fade-left">
                        <img src="images/home/chicken.jpg" class="d-block w-100" style="height:600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Chicken</h5>
                            <p class="font-weight-bolder">The hen is the smartest animal, it screams after it has laid an egg.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/home/duck.jpg" class="d-block w-100" style="height:600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-white"> Duck </h5>
                            <p>Always act like a duck ... looking calm and flat on the surface, paddling hard in the water.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/home/dove2.jpg" class="d-block w-100" style="height:600px;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-dark">Dove</h5>
                            <p class="text-dark">A thought is like a dove, if you do not approach it politely it will fly forever.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section class="container mt-3">
            <div class="row" data-aos="flip-up" data-aos-once="true">
                <h2 class="m-auto text-uppercase">our Specialize </h2>
            </div>
            <div class="row" data-aos="zoom-in" data-aos-once="true">
                <div class="col-12 col-md">
                    <img src="images/home/chicken.jpg" alt="not founded the image" style="display: block;">
                    <article>
                        <h3 class="text-center text-uppercase ">Chicken</h3>
                        <p class="text-dark">A chicken (Gallus gallus domesticus) is a kind of domesticated
                            bird. It is raised in many places for its meat and eggs. They are usually
                            kept by humans as livestock. Most breeds of chickens can fly for a short
                            distance.</p>
                    </article>
                </div>
                <div class="col-12 col-md">
                    <img src="images/home/duck.jpg" alt="not founded the image" style="display: block;">
                    <article>
                        <h3 class="text-center text-uppercase">Duck</h3>
                        <p class="text-dark">Duck is the common name for numerous species in the waterfowl
                            family Anatidae which also includes swans and geese. Ducks are mostly
                            aquatic birds, mostly smaller than the swans and geese, and may be found
                            in both fresh water and sea water.</p>
                    </article>
                </div>
                <div class="col-12 col-md">
                    <img src="images/home/dove.jpg" alt="not founded the image" style="display: block;">
                    <article>
                        <h3 class="text-center text-uppercase">Dove</h3>
                        <p class="text-dark">There are more than 300 species in the family.
                            They usually make nests of sticks, and their two white eggs are
                            incubated by both the male and the female parent.
                            Doves feed on seeds, fruit and plants.</p>
                    </article>
                </div>
            </div>
        </section>
        <section class="container-fluid m-0 p-0 overflow-hidden gap-0" >
            <div class="row  mt-2 mb-2" data-aos="fade-up" data-aos-once="true">
                <h1 class="m-auto text-uppercase">gallray</h1>
            </div>
            <div class="row no-gutters" data-aos="zoom-in-right" data-aos-once="true">
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-one">
                        <span class="animate__animated animate__heartBeat">Chicken</span>
                    </div>
                </div>
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-two">
                        <span class="animate__animated animate__heartBeat">Duck</span>
                    </div>
                </div>
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-three" >
                        <span class="animate__animated animate__heartBeat">Dove</span>
                    </div>
                </div>
            </div>
            <div class="row mt-md-2 no-gutters" data-aos="zoom-in-left" data-aos-once="true">
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-four" >
                        <span class="animate__animated animate__heartBeat">Duck</span>
                    </div>
                </div>
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-five" >
                        <span class="animate__animated animate__heartBeat">Chicken</span>
                    </div>
                </div>
                <div class="parent mb-2 mb-md-0 col-12 col-md">
                    <div class="child bg-six" >
                        <span class="animate__animated animate__heartBeat">Dove</span>
                    </div>
                </div>
            </div>
        </section>

    @endguest
@endsection
