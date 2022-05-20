@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">
            {{isset($post) ? 'Edit Disease' : 'Create Disease'}}
        </div>
        <div class="card-body">
            <form action="{{isset($post) ? route('Disease.update', $post->id) :route('Disease.store') }}" method="POST" enctype="multipart/form-data">

                @csrf
                @if(isset($post))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{isset($post) ? $post->name : ''}}">
                </div>

                <div class="form-group">
                   <textarea class="form-control" name="Symptoms" rows="5" cols="5" placeholder="Symptoms">{{isset($post) ? $post->Symptoms : ''}}</textarea>
                </div>

                <div class="form-group">
                    <label for="category">Category:</label>
                    <select name="category" id="category" class="form-control">
                        @if(count($categories) > 0))
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @if(isset($post))
                                            @if($category->id === $post->category_id)
                                                selected
                                            @endif
                                        @endif>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        @else
                            <option value="">There Are No Categories</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" >{{ isset($post) ? 'Update Disease' : 'Add Disease' }}</button>
                </div>

            </form>

        </div>

    </div>
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
    @media screen and (max-width: 600px){
        .card-default {
            margin-top: 2rem;
        }
    }
    button{
        margin-left: 50%;
        transform: translateX(-50%);
    }

    .post-image{
        width: 80%;
        max-width: 400px;
        max-height: 300px;
        margin-left: 50%;
        transform: translateX(-50%);
    }


</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.tags-selector').select2();

    });
</script>

@endsection
