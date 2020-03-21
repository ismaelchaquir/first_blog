@extends('layouts.app')

@section('post-slider')
@include('layouts/post-slider')

@endsection

@section('content')

<!-- start of post -->
<div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>

         @foreach($posts as $post)
          <div class="post clearfix">
            <img
              src="{{Storage::disk('local')->url($post->image)}}"
              alt="post image"
              class="post-image"
            />
            <div class="post-preview">
              <h4>
                <a href="{{route('post.show',$post->id)}}"
                  >{!! htmlspecialchars_decode($post->title) !!}</a
                >
              </h4>
              <i class="fas fa-user"> Awa Melvine</i>
              &nbsp;

              <i class="fas fa-calendar"> {{$post->created_at->diffForHumans()}}</i>
              <br>
             @foreach($post->tags as $category)
              <small >{{$category->name}}</small>
             @endforeach
             <hr class="mgbr">
             <div class="preview-text">
             <p>
                {!! str_limit(htmlspecialchars_decode($post->content), 400)   !!}
          </p>
             </div>
              
              <a href="single.html" class="btn read-more">Read More</a>
            </div>
          </div>
     @endforeach
</div>
@endsection

@section('sidebar')
@include('layouts/sidebar')

@endsection
