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

    <title>Admin Section - Add Post</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <h1 class="logo-text"><span>Awa</span> Inspires</h1>
      </div>
      <i class="fas fa-bars menu-toggle"></i>
      <ul class="nav">
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

    <div class="admin-wrapper">
      <!-- left sidebar -->
      <div class="left-sidebar">
        <ul>
          <li><a href="{{route('post.index')}}">Manage Posts</a></li>
          <li><a href="#">Manage Users</a></li>
          <li><a href="{{route('category.index')}}">Manage Categories</a></li>
           <li><a href="{{route('tag.index')}}">Manage Tags</a></li>
        </ul>
      </div>
      <!-- end of left sidebar -->

      <!-- admin content -->
      <div class="admin-content">
        <div class="button-group">
          <a href="#" class="btn btn-big">Add Post</a>
          <a href="#" class="btn btn-big">Add Post</a>
        </div>

        <div class="content">
          <h2 class="page-title">Add Post</h2>

          <form action="{{route('post.store',$post->id)}}" method="post" enctype="multipart/form-data">
            <div>
              <label>Title</label>
              <input type="text" name="title" id="title" class="text-input" />
            </div>

            <div>
              <label>Content</label>
              <textarea
                name="content"
                id="body"
                class="text-input"
                rows="7"
              ></textarea>
            </div>

            <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="text-input">
                </div> 

            <div>
              <label for="topics">Topics</label><br>
              <hr class="mb-hr">
                    @foreach($tags as $tag)
                    <!-- form-group form-check form-check-inline
                    form-check-input 
                    form-check-label -->
                    <input type="checkbox" value="{{$tag->id}}" name="tag_id[]" class="form-check-input">
                    <label class="mr-2 form-check-label ">{!! htmlspecialchars_decode($tag->name) !!}</label>
                    @endforeach
            </div>

            <div>
              <button type="submit" class="btn btn-big">Add Post</button>
            </div>
            {{ csrf_field() }}
          </form>
        </div>
      </div>

      <!-- end of admin content -->
    </div>
    <!-- Page Wrapper -->

    <!-- JQuery -->

     <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
     <script src="{{asset('js/ckeditor5/ckeditor5/ckeditor.js')}}"></script>
     <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
     <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <!-- Custom Scripts -->
  </body>
</html>
