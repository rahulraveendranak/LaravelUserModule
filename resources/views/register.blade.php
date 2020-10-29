<!DOCTYPE html>
<html>
    
<head>
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #7abecc !important;
		}
		.user_card {
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #74cfbf;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}

		.form_container {
			margin-top: 20px;
		}

		#form-title{
			color: #fff;
		}
		.login_btn {
			width: 100%;
			background: #33ccff !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #f7ba5b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

	</style>

</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<h3 id="form-title">REGISTER ACCOUNT</h3>
				</div>
				<div class="d-flex justify-content-center form_container">

					<form method="POST" action="{{url('post-register')}}" id="regForm">
                    {{ csrf_field() }}
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
                            <input type="text" name="username" placeholder="Username..." class="form-control">
							@if ($errors->has('username'))
                            <span class="error">{{ $errors->first('username') }}</span>
                            @endif
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
                            <input type="email" name="email" placeholder="Email..." class="form-control">
							@if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                            @endif
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-calendar"></i></span>
							</div>
                            <input type="date" name="dob" placeholder="DateOfBirth..." class="form-control">
							@if ($errors->has('dob'))
                            <span class="error">{{ $errors->first('dob') }}</span>
                            @endif
						</div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-city"></i></span>
							</div>
                            <input type="text" name="city" placeholder="Your city..." class="form-control">
							@if ($errors->has('city'))
                            <span class="error">{{ $errors->first('city') }}</span>
                            @endif
						</div>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                            <input type="password" name="password" placeholder="password..." class="form-control">
							@if ($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                            @endif
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
                            <input type="password" name="password_confirmation" placeholder="Re enter password..." class="form-control">
							@if ($errors->has('password'))
                            <span class="error">{{ $errors->first('passwordConfirmation') }}</span>
                            @endif
						</div>

				   		<div class="d-flex justify-content-center mt-3 login_container">
				 			<input class="btn login_btn" type="submit" value="Register Account">
				   		</div>
					</form>
				</div>
			
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a href="{{url('login')}}" class="ml-2">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
					
		
	</script>
</body>
</html>

