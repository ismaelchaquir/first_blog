@extends('layouts.app')

@section('content')

<div class="main-content-wrapper">
      <div class="main-content single">
          <h2 class="post-title">{!! $post->title !!}</h2>
          <div class="post-content">
            <img src="{{Storage::disk('local')->url($post->image)}}" alt="post image" />
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
              architecto similique at sapiente, repellat quidem, voluptate
              officiis, fugiat ut itaque corporis debitis quaerat laudantium
              cupiditate? Autem iure cupiditate maxime. Doloribus.
            </p>
            <p>{!! $post->content !!}</p>

          </div>
        </div>

        </div>
        
        <!-- end of main content -->

        <!-- sidebar -->
        <div class="sidebar single">
          <!-- search section -->
        
          <div class="section popular">
            <h2 class="section-title">Popular Course</h2>

            @foreach($posts as $posti)
            <div class="post clearfix">
              
              <img src="{{Storage::disk('local')->url($posti->image)}}" alt="post image" />
              <a href="{{route('post.show',$posti->id)}}"><h4>{!! $posti->title !!}</h4></a>
              
            </div>
            @endforeach

          </div>

          <!-- search topics -->
          <div class="section topics">
            <h2 class="section-title">Popular Tags</h2>
            <ul>
              @foreach($tags as $tag)
              <li><a href="{{route('postag',$tag->id)}}">{!! $tag->name !!}</a></li>
              @endforeach
            </ul>
          </div>

          <!-- end of topics -->
        </div>

@endsection



