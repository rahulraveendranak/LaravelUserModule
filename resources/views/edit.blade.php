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
  <a class="navbar-brand text-light" href="{{url('dashboard')}}">User Details</a>
  <ul class="nav justify-content-end">
  
  <li class="nav-item">
    <a class="nav-link btn btn-light" href="{{url('logout')}}">Logout</a>
  </li>
</ul>
</nav>


@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="container">
<form method="POST" action="{{url('profile-update')}}" >
{{ csrf_field() }}

<div class="form-group">
<div class="form-group col-md-6">
      <label for="inputusername">Username</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{$user['username']}}">
                            @if ($errors->has('username'))
                           <span class="error">{{ $errors->first('username') }}</span>
                            @endif
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" placeholder="Email..." class="form-control" value="{{$user['user_detail']['email']}}" >
							@if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                            @endif
    </div>
  <div class="form-group">
    <label for="inputAddress2">Date Of Birth</label>
    <input type="date" name="dob" placeholder="DateOfBirth..." class="form-control" value="{{$user['user_detail']['dob']}}">
							@if ($errors->has('dob'))
                            <span class="error">{{ $errors->first('dob') }}</span>
                            @endif
  </div>
  <div class="form-group">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name="city" placeholder="Your city..." class="form-control" value="{{$user['user_detail']['city']}}">
							@if ($errors->has('city'))
                            <span class="error">{{ $errors->first('city') }}</span>
                            @endif
    </div>
  </div>
  <div class="form-group">
  
    </div>
  </div>
  <button type="submit">Update</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>