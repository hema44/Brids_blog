@extends('layouts.blog')

@section('formstyle')
    <style>
        input{
            width: 100%;
            margin: 8px 0;
            border-radius: 50px;
        }
        input:focus {
            outline: none;
            box-shadow: 3px 3px 4px #0066ff;
        }
        textarea{
            height: 200px;
            width: 100%;
            margin: 8px 0;
            border-radius: 25px;
        }
        textarea:focus {
            outline: none;
            box-shadow: 3px 3px 4px #0066ff;
        }
        .sty{

            display: block;
            height: 60px;
            margin: auto;
            line-height: 60px;
        }
        .sty1{

            display: block;
            height: 200px;
            font-size: 20px;
            margin: auto;
            line-height: 200px;
        }
    </style>
@endsection
@section('header')
    <!-- Header -->
        <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%); height: 350px;">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h1 class="animate__animated animate__fadeInDown">Contact Us</h1>
                        <p class="opacity-90 mt-6 animate__animated animate__backInRight animate__delay-1s">If you have any questions, we will be more than happy to serve you.<br>Don't hesitate to message or call us.</p>

                    </div>
                </div>

            </div>
        </header><!-- /.header -->
@endsection

@section('content')
    <!-- Main Content -->
    <main>
{{--    contact us form    --}}
    <section class="container mt-3" style="min-height: 400px" data-aos="slide-left"   data-aos-once="true">
            <div  class="row m-auto">
                <h2>Get in teach with us</h2>
            </div>
        <div class="row">
            <form class="col-12 col-md-6"  method="POST" action="/contact">
                @csrf
                <div class="row" style="height: 60px">
                    <div class="col-2 text-center" style="height: 60px;"><i class="sty  fas fa-user"></i></div>
                    <input class="col-10" type="text" name="name" required>
                </div>
                <div class="row" style="height: 60px">
                    <div class="col-2 text-center" style="height: 60px;"><i class="sty fas fa-envelope-open"></i></div>
                    <input class="col-10" type="email" name="email" required>
                </div>
                <div class="row" style="">
                    <div class="col-2 text-center" style="height: 60px;"><i class="sty1 fas fa-pen-square"></i></div>
                    <textarea class="col-10" style="" name="subject"></textarea>
                </div>
                <div class="row">
                    <input class="col-6 mt-6 mx-auto btn btn-facebook" type="submit" name="submit" style="display:block; border-radius: 50px">
                </div>
            </form>
            <div class="col-12 col-md-6 mt-6">
                <p class="mt-3 font-size-20 text-center"><i class="fas fa-phone-alt"></i> +20 123 123 1235</p>
                <p class="mt-3 font-size-20 text-center"><i class="fas fa-map-marker-alt"></i> 1378  Jerome Avenue , Harlingen </p>
                <p class="mt-3 font-size-20 text-center"><i class="fas fa-envelope-open"></i> hr@bradies.com</p>
            </div>
        </div>
    </section>

{{--    map section   --}}
    <section class="container-fluid mb-5" data-aos="slide-right" data-aos-once="true">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.665587169879!2d31.198672681100476!3d30.473908763626902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df5645a794dd%3A0xf23e10419a7decdf!2z2YPZhNmK2Kkg2KfZhNit2KfYs9io2KfYqiDZiNin2YTYsNmD2KfYoSDYp9mE2KfYtdi32YbYp9i52YktINis2KfZhdi52Kkg2KjZhtmH2Kc!5e0!3m2!1sar!2seg!4v1619138653716!5m2!1sar!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        </div>
    </section>
    </main>
@endsection



