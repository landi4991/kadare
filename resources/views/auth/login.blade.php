<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-color:#00315c">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://shtepiakadare.tirana.al/wp-content/uploads/2019/09/logo-final-e1568377792521.png" alt="logo">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
						
							<form action="{{route('login')}}" method="POST" class="needs-validation" >
							 @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									
									 <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" Placeholder="email" autofocus>



									@error('email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									 @enderror
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
										
									</div>
								 <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"Placeholder="*********">
								    @error('password')
									<div class="invalid-feedback">
								    	Password is required
							    	</div>
									   @enderror
								</div>

								<div class="d-flex align-items-center">
									
									<button type="submit" class="btn btn-primary ms-auto">
										Login
									</button>
								</div>
							</form>
						</div>
						<!--<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="register.html" class="text-dark">Create One</a>
							</div>
						</div>-->
					</div>
					<div class="text-center mt-5"style="color:white">
						Copyright &copy; <script type="text/JavaScript">

document.write(new Date().getFullYear());

</script> Të gjitha të drejtat e rezervuara <a href="https://dptiidh.tirana.al/" target="_blank">DZHG</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>