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
  <nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand text-light" href="{{url('/')}}">Home</a>
  <ul class="nav justify-content-end">
  
  <li class="nav-item">
    <a class="nav-link btn btn-light" href="{{url('logout')}}">Logout</a>
  </li>
</ul>
</nav>

<h1> User Details</h1>  
<div class="container">

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <td scope="col">1</td>
      <td scope="col">Name</td>
      <td scope="col">{{$user['username']}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">2</td>
      <td>Email</td>
      <td>{{$user['user_detail']['email']}}</td> 
    <tr>
      <td scope="row">3</td>
      <td>Date Of Brith</td>
      <td>{{$user['user_detail']['dob']}}</td>   
    </tr>
    <tr>
      <td scope="row">4</td>
      <td>City</td>
      <td>{{$user['user_detail']['city']}}</td>
    </tr>
  
  </tbody>
</table>  
<a class="btn btn-secondary" href="{{url('profile-edit')}}" role="button">Edit</a>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>