<!doctype html>
<html lang="en">

<head>
	<title>Login dulu bestieeee</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="login/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(login/images/baldes.jpeg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-50">
									<h3 class="mb-4">Login</h3>
								</div>
								<div class="w-100">
									
								</div>
							</div>
							<form action="p-login.php" method="post" class="signin-form">
								<div class="form-group mt-3">
									<input type="text" name="username" class="form-control" required>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" name="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field"
										class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" value="LOGIN" class="form-control btn btn-primary rounded submit px-3">Login</button>
								</div>
								<div class="form-group d-md-flex">
									
								</div>
							</form>
							<p class="text-center"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="login/js/jquery.min.js"></script>
	<script src="login/js/popper.js"></script>
	<script src="login/js/bootstrap.min.js"></script>
	<script src="login/js/main.js"></script>

</body>

</html>