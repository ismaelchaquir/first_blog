@extends('layouts.app')

@section('content')

<div id="scoped-content">
    <style type="text/css" scoped>
        li{
          margin-left:30px;
        }
        h3{
          font-weight:bolder !important;
        }
        .text-light{
          color:#b7b7b7;
          font-size: 14px;
        }
        .text-black{
          color:black;
          font-size: 14px; 
        }
        .title-up{
          margin-top: -12px;
        }
        .well{  
          background-color: #f8f9fa !important;
          width:600px;
        }
    </style>


</div>


<!-- <div class="main-content-wrapper"> -->
      <div class="main-content single">
          <h1 class="post-title">{!! $post->title !!}</h1>
          <p class="text-light">by <strong class="text-black">FT</strong> - on
           <strong class="text-black">{{$post->created_at->diffForHumans()}}</strong></p>
          <div class="post-content">
            <img src="{{Storage::disk('local')->url($post->image)}}" alt="post image" />
            
            <p>{!! $post->content !!}</p>

          </div>


<!-- form -->
       

        

<ul class="comment-section comment-container">
        @foreach($comments as $comment)
			<li class="comment user-comment see">

                <div class="info">
                    <a href="#" title="ismael chaquir">{{$comment->name}}</a>
                    <span>{{$comment->created_at->diffForHumans()}}</span>
                </div>

                <a class="avatar" href="#">
                    <img src="https://secure.gravatar.com/avatar/524a915f0b1df30f6d911728efcff95f?s=120&#038;d=mm&#038;r=g 2x" width="35" alt="Profile Avatar" title="Anie Silverston" />
                </a>

                <p class="comment-content">{{strip_tags($comment->comment)}}
                  <a style="cursor: pointer;" cid="{{ $comment->id }}"  token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                  &nbsp;
                </p>
                
                <div class="reply-form">
                                    
                                    <!-- Dynamic Reply form -->



                  @foreach($comment->replies as $rep)
                                     @if($comment->id === $rep->comment_id)
                                        <div class="well">
                                            <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                            <span> {{ $rep->reply }} </span>
                                            <div style="margin-left:10px;">
                                                <a  rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply" token="{{ csrf_token() }}">Reply</a>&nbsp;<a did="{{ $rep->id }}" class="delete-reply" token="{{ csrf_token() }}" >Delete</a>
                                            </div>
                                            <div class="reply-to-reply-form">
                                    
                                                <!-- Dynamic Reply form -->
                                                
                                            </div>
                                            
                                        </div>
                                    @endif 
                    @endforeach





                                    
                  </div>

                    

			</li>
   @endforeach

		</ul>
     

       
<!-- end of form -->

<form action="{{route('comments.store')}}" method="post"  enctype="multipart/form-data">
<div class="note-before"><p>Your email address will not be published.</p></div>

<div>
  <label type="hidden">Comment</label>
<textarea 
  name="comment"
  id="body"
  class="text-input"
  rows="10"
  placeholder="Write your comment here..."
  >
</textarea>
      </div>

<div>
  <label>Name</label>
  <input name="name" id="name" class="text-input" type="text" placeholder="Enter your name..." value="{{ old('name') }}" required autocomplete="name" autofocus/>
      </div>

<p>
        <label>Email</label>
  <input type="email" name="email" class="text-input" value="{{ old('email') }}" required autocomplete="email"/>
  <input type="hidden" name="post_id" value="{{$post->id}}" />
</p>





<div>
    <button type="submit" class="btn btn-big">Add Post</button>
</div>

{{ csrf_field() }}
</form>


        </div>

        

<!-- </div> -->

        
        <!-- end of main content -->

        <!-- sidebar -->
        <div class="sidebar single">
          <!-- section popular course -->
        
          <div class="section popular">
            <h2 class="section-title">Popular Course</h2>

            @foreach($posts as $posti)
            <div class="post clearfix">
              <a href="{{route('post.show',$posti->id)}}">
                <img src="{{Storage::disk('local')->url($posti->image)}}" alt="post image" />
                <p class="title-up"><h4>{{ strip_tags($posti->title) }}</h4></p>
              </a>
              
              
            </div>
            @endforeach

          </div>

          <!-- section popular tags -->
          <div class="section topics">
            <h2 class="section-title">Popular Tags</h2>
             
            <div class="tagcloud">
              @foreach($tags as $tag)
                <a href="{{route('postag',$tag->id)}}">{{strip_tags($tag->name) }}</a>
               @endforeach
            </div>
          </div>

          <!-- end of section topics -->
        </div>

        

@endsection



