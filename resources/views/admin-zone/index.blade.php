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
          <li><a href="{{route('tag.index')}}">Manage Tags</a></li>
        </ul>
      </div>
      <!-- end of left sidebar -->

      <!-- admin content -->
      <div class="admin-content">
        
      </div>

      <!-- end of admin content -->
    </div>
    <!-- Page Wrapper -->

    <!-- JQuery -->
    <script src="js/jquery.js"></script>
    <script src="../../js/scripts.js"></script>
    <!-- Custom Scripts -->
  </body>
</html>
