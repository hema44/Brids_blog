@extends('layouts.blog')



@section('header')
    <!-- Header -->

        <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);height: 320px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h1 class="animate__animated animate__fadeInDown">About US</h1>
                        <p class="lead-2 opacity-90 mt-6 animate__animated animate__backInRight animate__delay-1s">what you need to know about team</p>

                    </div>
                </div>

            </div>
        </header><!-- /.header -->

@endsection

@section('content')
    <!-- Main Content -->
    <section class="container mt-2">
        <div class="row" data-aos="flip-up">
            <h1 class=" col text-center text-uppercase">who are we</h1>
        </div>
        <div class="row" data-aos="slide-up"     data-aos-once="true">
            <div class="col-12 col-md-6"><img src="/images/ducks.jpg"></div>
            <div class="col-12 col-md-6">
                <article>
                    <h3>birds team </h3>
                    <p class="font-weight-bolder font-size-20">we make this system to make all have the easy way to deal with birds
                     & proved the right way to deal with the birds disses </p>
                </article>
            </div>
        </div>
    </section>

    <!-- OUR TEAM SECTION -->
    <section class="container mb-7">

        <h1 class="text-center text-uppercase mt-5 mb-5" data-aos="fade-up" data-aos-once="true">our Team</h1>

        <div class="carousel" style="min-height: 300px;" data-flickity='{ "autoPlay": 2500, "pauseAutoPlayOnHover": true ,"prevNextButtons": false }'>
            <div class="row" >
                <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-out-down"  data-aos-once="true">
                    <img src="/images/Ahmed_Mousa.jpg" class="mx-auto" style="height:300px;display: block;width: 300px; border-radius: 100%;">
                    <h3 class="text-center">Ahmed Mousa</h3>
                    <h3 class="text-center">IS Student</h3>
                    <ul class="list-unstyled mb-0 text-center">

                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic" target="_blank" href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic" href="mailto:">
                            <i class="fa fa-envelope blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-out-down" data-aos-delay="300"  data-aos-once="true">
                    <img src="/images/Ahmed_Ramadan.jpeg" class="mx-auto" style="height:300px;display: block;width:300px; border-radius: 100%;">
                    <h3 class="text-center">Ahmed Ramadan</h3>
                    <h3 class="text-center">IS Student </h3>
                    <ul class="list-unstyled mb-0 text-center">

                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic" target="_blank" href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic" href="mailto:">
                            <i class="fa fa-envelope blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-out-down" data-aos-delay="500" data-aos-once="true">
                    <img src="/images/Ahmed_Salam.jpg" class="mx-auto" style="height:300px;display: block;width:300px; border-radius: 100%;">
                    <h3 class="text-center">Ahmed Salam</h3>
                    <h3 class="text-center">IS Student</h3>
                    <ul class="list-unstyled mb-0 text-center">

                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic" target="_blank" href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic" href="mailto:">
                            <i class="fa fa-envelope blue-text"> </i>
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-aos="zoom-out-down" data-aos-delay="700" data-aos-once="true">
                    <img src="/images/Ahmed.jpg" class="mx-auto" style="height:300px;display: block;width:300px; border-radius: 100%;">
                    <h3 class="text-center">Ahmed Khairat</h3>
                    <h3 class="text-center">IS Student</h3>
                    <ul class="list-unstyled mb-0 text-center">

                        <!-- Twitter -->
                        <a class="p-2 fa-lg tw-ic" target="_blank" href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in blue-text"> </i>
                        </a>
                        <!-- Instagram -->
                        <a class="p-2 fa-lg ins-ic" href="mailto:">
                            <i class="fa fa-envelope blue-text"> </i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

    </section>

@endsection



