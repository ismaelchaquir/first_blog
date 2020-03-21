@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card mb-4">
                <div class="card-header title">{{$tag->name}}</div>

                <div class="card-body">
                    <a href="{{route('tag.edit',$tag->id)}}" class="btn btn-warning btn-sm btn-margin-right">edit here</a>
                    <form action="{{route('tag.destroy',$tag->id)}}" class="form-wrapper" method="post">
                        {{method_field('delete')}}
                        <button class="btn btn-danger btn-sm btn-margin-right" type="submit">delete</button>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>

            <div class="card">
                @foreach($tag->posts as $post)
                <div class="card-header title">
                    <h3><a href="{{route('post.show',$post->id)}}" class="text-white">{{$post->title}}</a></h3>
                </div>

                <!-- <div class="card-body">
                    
                </div> -->
                @endforeach
            </div>

        </div>
    </div>
</div>

@endsection