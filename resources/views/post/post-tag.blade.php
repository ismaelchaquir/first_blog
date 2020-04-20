@extends('layouts.app')

@section('content')

{{--
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
--}}

<!-- aqui -->


 @foreach($tags as $tag)
    <p>Tag: {{$tag->name}}</p>
    <hr>
   @foreach($tag->posts as $post) 
  <div class="card">
<a href="{{route('post.show',$post->id)}}">
 
      
 
 
    <img src="{{Storage::disk('local')->url($post->image)}}" alt="picture" class="card-img" style="width:100%">
    <div class="container">
    <h4><b>{{ str_limit(strip_tags($post->title),50) }}</b></h4>

    

    <br>
    <p class="text-bottom">By:Freetuts  <span class="go-right"><i class="fas fa-eye"></i> {{$post->view_count}}</span></p>
    
    </div>
</a>
  </div>
    @endforeach
@endforeach


@endsection