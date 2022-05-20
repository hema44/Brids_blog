@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2 mt-2" style=" color: #ffffff">
        <a href="{{route('Disease.create')}}" class="btn btn-success" >Add Disease</a>
    </div>
    <div class="card card-default">
        <div class="card-header">
            Diseases
        </div>
        <div class="card-body">
            @if(count($Disease) > 0)
            <table class="table">
                <thead>
                <th>
                    name
                </th>
                <th>
                    Symptoms
                </th>
                <th>
                    Category
                </th>
                <th>Action</th>
                </thead>
                <tbody>
                    @foreach($Disease as $post)
                        <tr>
                            <td>
                                {{$post->name}}
                            </td>
                            <td>
                                {{$post->Symptoms}}
                            </td>
                            <td>
                                {{$post->category_id}}
                            </td>
                            <td class="actions">
                                <a href="{{route('Disease.edit', $post->id)}}" ><i  class="fa fa-edit fa-sm"></i></a>
                                <form action="{{route('Disease.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id='DeleteButton'><i class="fa fa-trash fa-sm" ></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @else
                    <div class="text-center">No Disease Yet!</div>
                @endif

                </tbody>

            </table>
    </div>
@endsection

@section('styles')
    <style>
        i{
            color: #252525;
            transition: all .4s ease-out;
            padding: 0 .3rem;
        }

        button{
            background: none!important;
            border: none;
            padding: 0!important;
            outline: none;
        }

        #TrashButton i{
            color: #e3342f;
        }
        #TrashButton i:hover{
            color: #C1312D;
        }
        i:hover{
            color: #3490dc;
        }

        .post-image{
            width: 50%;
            max-width: 400px;
            max-height: 300px;
        }

        .actions{
            display: flex;
            margin: 0 .2rem;
        }

        .fa-trash-restore {
            color: #3490dc;
        }

        .fa-trash-restore:hover{
            color: #307DBF;
        }
    </style>

@endsection

@section('scripts')
    <script>

    </script>

@endsection
