@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">My Profile</div>

    <div class="card-body">
        <form action="{{route('users.update-profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="about">About Me</label>
                <textarea type="text" name="about" id="about" class="form-control" >{{$user->about}}</textarea>
            </div>
            <div class="form-group">
                <div><input style="display: block" name="image_1" id="about" class="m-auto" type="text" value="{{auth()->user()->image}}" disabled></div>
                <label for="about">your image</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label for="about">gender</label>
                <select name="gender" id="gender" class="form-control">
                    @if(auth()->user()->gender == 'male')
                        <option value="male" selected>male</option>
                        <option value="female">female</option>
                    @else
                        <option value="male">male</option>
                        <option value="female" selected>female</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="date" name="birth_data" id="date" class="form-control" value="{{auth()->user()->birth_data}}">
            </div>
            <button type="submit" class="btn btn-success ">Update</button>

        </form>
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

