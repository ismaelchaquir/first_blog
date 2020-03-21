@extends('layouts.app')

@section('content')

 @foreach($tags as $tag)
<p>Tag: {{$tag->name}}</p>
<hr>
@foreach($tag->posts as $post)
    <p></p>
    <div id="container" style="width: 250px;height: 200px;">
        <a href="{{route('post.show',$post->id)}}">
        <img src="{{Storage::disk('local')->url($post->image)}}" alt="image" style="width: 250px;height: 200px;">
        </a>

        <span class="stretch">{{ str_limit($post->title, 25) }}</span>
    </div>
@endforeach
<br>
@endforeach 


@endsection