<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500|Rubik:500" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('user/all.css')}}" />
    <link rel="stylesheet" href="{{asset('user/style.css')}}" />
    <link rel="stylesheet" href="{{asset('user/admin.css')}}" />
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}" /> -->

    <title>Admin Section - Manage Posts</title>
<style>
.wrap{
  width:1000px;
  margin: auto;
  margin-top: 100px;
}

.card{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
  transition: 0.4s;
  width: 300px;
  height:290px;
  background: #fff;
  text-align: left;
  font-size: 16px;
  font-family: sans-serif;
  float: left;
  margin-left:10px;
  margin-right:10px;
  margin-bottom:30px;
   margin-top:30px;
   position: relative;
}
.card:hover .img{
  opacity: 0.5;
}
.lara{
  position: absolute;
  top:30;
  left:0;
  padding: 0.2rem 3rem 0.2rem 0.2rem;
  background: white;
  color: #006669;
  clip-path: polygon(0 0, 80% 0, 100% 100%, 0 100%);
  opacity: 0;
   /* transition: all 1s linear;  */
  text-decoration: none !important; */ 
}
.card:hover .lara{
  opacity:1;
}
.card:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.6);
  color:#9b9999;
}
.container{
  padding:2px 16px;
}
.text-right{
  float:right;
}
</style>


  </head>
  <body>
    <header>
      <div class="logo">
        <h1 class="logo-text"><span>Awa</span> Inspires</h1>
      </div>
      <i class="fas fa-bars menu-toggle"></i>
      <ul class="nav">
<li><a href="#">Manage Posts</a></li>
          <li><a href="#">Manage Users</a></li>
          <li><a href="#">Manage Topics</a></li>

        <li>
        

          <a href="#">
            <i class="fas fa-user"></i>
            Awa Melvine
            <i class="fas fa-chevron-down" style="font-size: .8rem;"></i>
          </a>
          <ul>
            <li><a href="#" class="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
{{--
    <div class="admin-wrapper">
     

        
        <div class="content">
        <div class="row">
   
            <div class="col-md-12">

                <div class="col-md-6">
                    <h3>Published:</h3>
                    <hr>
                    @foreach($publishedPosts as $post)
                        <h3><a href="{{route('post.show', $post->id)}}">{!! str_limit($post->title, 30) !!}</a></h3>
                        <p>{!! str_limit($post->content, 30) !!}</p>
                        <form action="{{route('post.update',$post->id)}}" method="post">
                            {{ method_field('patch')}}
                            <input type="checkbox" value="0" name="status" checked style="display:none">
                            <button type="submit" class="btn">Save as draft</button>
                            {{ csrf_field() }}
                        </form>
                    @endforeach
                </div>

                <div class="col-md-6">
                    <h3>Draft:</h3>
                    <hr>
                    @foreach($draftPosts as $post)
                        <h3><a href="{{route('post.show', $post->id)}}">{!! str_limit($post->title, 30) !!}</a></h3>
                        <p>{!! str_limit($post->content, 30) !!}</p>
                        <form action="{{route('post.update',$post->id)}}" method="post">
                            {{ method_field('patch')}}
                            <input type="checkbox" value="1" name="status" checked style="display:none">
                            <button type="submit" class="btn">Save as draft</button>
                            {{ csrf_field() }}
                        </form>
                    @endforeach
                </div>

            </div> 

        </div>
        <!-- row -->
        </div>
        <!-- conatiner -->

    </div>
    <!-- Page Wrapper -->
--}}

<div class="wrap">
 @foreach($draftPosts as $post)
  <div class="card">
  @foreach($post->tags as $category)
      <small class="lara">{!! htmlspecialchars_decode($category->name) !!}</small>
  @endforeach
 
    <img src="{{Storage::disk('local')->url($post->image)}}" alt="picture" class="card-img" style="width:100%">
    <div class="container">
    <b>{!! str_limit(htmlspecialchars_decode($post->title),50) !!}</b>
    <br>
    <p>By:Freetuts
    <span class="text-right"><i class="fas fa-chevron-down"></i></span>
    </p>
    
    </div>
  </div>
   @endforeach
</div>


    <!-- JQuery -->
<script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
     <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
     <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <!-- Custom Scripts -->
  </body>
</html>
