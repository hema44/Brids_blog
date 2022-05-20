@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

{{--            {{ __('You are logged in!') }}--}}
            <div class="row">
                <div class="col">
                    @if(Auth::user()->provider_id =='0')
                        <img style="width:200px;height:200px;border-radius:50%;" class="user-image"  src="images/users/{{auth()->user()->image}}">
                    @else
                        <img style="width:200px;height:200px;border-radius:50%;" class="user-image"  src="{{auth()->user()->image}}">
                    @endif
                </div>
                <div class="col">
                    <p style="line-height:20px;margin-top:40px;"> user name : {{auth()->user()->name}}</p>
                    <p style="line-height:20px;">data of barth : {{auth()->user()->birth_data}}</p>
                    <p style="line-height:20px;">gender : {{auth()->user()->gender}}</p>
                </div>
            </div>
            <div class="row">
                <div>
                    @if(!auth()->user()->about == "")
                        <h1>About me </h1>
                        <p> {{auth()->user()->about}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    @media screen and (max-width: 600px){
        .card{
            margin-top: 2rem;
        }
    }
</style>

