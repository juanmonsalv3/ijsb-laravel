<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="public/css/bootstrap.min.css" >
        <link rel="stylesheet" href="public/css/app.css" >
        @stack('stylesheets')

        <script src="public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="public/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script src="public/js/app.js" type="text/javascript"></script>
        @stack('scripts')
        <title>IJSB - @yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <!-- Navbar content -->
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <a class="navbar-brand" href="#">
                    {{ config('app.school_name') }}
                    <img src="public/logo.png" width="35" height="35" alt="">
                </a>
                <ul class="nav navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Estudiantes <span class="sr-only">(current)</span></a>
                  </li>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="supportedContentDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                </ul>
            </div>
        </nav>
        
    </body>
</html>