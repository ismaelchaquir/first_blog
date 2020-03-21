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

    <title>Admin Section - Manage Posts</title>
  </head>
  <body>
    <p></p>
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
          <a href="{{route('category.index')}}" class="btn btn-big">Manage Categories</a>
        </div>

        <div class="content">
          <h2 class="page-title">Edit Category</h2>

          <form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
              {{method_field('patch')}}
            <div>
              <label>Name</label>
              <input type="text" name="name" id="title" class="text-input" value="{!! $category->name !!}"/>
            </div>

            <div>
              <button type="submit" class="btn btn-big">Update</button>
            </div>
            {{csrf_field()}}                   
          </form>
          
        </div>
      </div>

      <!-- end of admin content -->
    </div>
    <!-- Page Wrapper -->


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
     <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
     <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
  </body>
</html>
