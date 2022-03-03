<!DOCTYPE html>
<html lang="en">
<head>
	<title>Prodamas Plus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--icon-->
    <link href="img/icon.png" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/Login_v16/css/main.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-color:#4d148c;">
			<div class="wrap-login100 p-t-30 p-b-50">

				<form class="login100-form validate-form p-b-33 p-t-5" action="/postlogin" method="POST" enctype="multipart/form-data">
				<span class="login100-form-title p-b-41" style="color: black; margin-top: 15px;">
					Login
				</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
                    @csrf
					</div>
					<br>

					<h6 class="text-center"> Belum punya akun? </h6><br>
					<p class="text-muted text-center"><a href="/registrasi" class="h6 text-decoration-none text-dark">SIGN UP</a></p>

				</form>
			</div>
		</div>
	</div>

	<!--script-->
	<script src="login/Login_v16/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login/Login_v16/vendor/animsition/js/animsition.min.js"></script>
	<script src="login/Login_v16/vendor/bootstrap/js/popper.js"></script>
	<script src="login/Login_v16/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login/Login_v16/vendor/select2/select2.min.js"></script>
	<script src="login/Login_v16/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/Login_v16/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login/Login_v16/vendor/countdowntime/countdowntime.js"></script>
	<script src="login/Login_v16/js/main.js"></script>

</body>
</html>
