<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DashBoard</title>
  </head>
  <body>
 
        @auth
        <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-light" href="{{url('/')}}">Home</a>
        <ul class="nav justify-content-end">

        <li class="nav-item">
       <a class="nav-link btn btn-secondary" href="{{url('dashboard')}}">User details</a>
       </li>
       <li class="nav-item">
       <a class="nav-link btn btn-light" href="{{url('logout')}}">Logout</a>
       </li>
       </ul>
       </nav>
        @endauth
        @guest
        <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand text-light" href="{{url('/')}}">Home</a>
        <ul class="nav justify-content-end">
        
        <li class="nav-item">
        <a class="nav-link btn btn-secondary" href="{{url('login')}}">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link btn btn-light" href="{{url('register')}}">Register</a>
        </li>
       </ul>
        </nav>
        @endguest
        
        </nav>
        <div class="container">
            <div class="content">
                <div class="title m-b-md text-center">
                <h1>Welcome</h1>
                </div> 
              </div>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>