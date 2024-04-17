<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinecraftManager</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>


<body class="">
    <header class="jumbotron jumbotron-fluid mb-0 bg-success">
            
        <img src="{{asset('images/logo.png')}}" alt="Logo" class="p-3">
        
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a class="navbar-brand" href="#">Home</a>     
     
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/items') }}">Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/achievements') }}">Achievements</a>
          </li>
        </ul>
    </nav>

      <article class="container rounded p-3 mt-3 ">

      @yield('main')
       
    
      </article>



    </article>

</body>
</html>