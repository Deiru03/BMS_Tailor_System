<?php require_once 'app/init.php';
if ($Ouser->is_login() != false) {
	header("location:index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-us">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
	<title>Log in</title>
	<style>
		body {
			font-family: 'Poppins', sans-serif;
			background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.login-container {
			background: white;
			border-radius: 20px;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
			overflow: hidden;
			max-width: 1000px;
			width: 90%;
		}
		.login-form-container {
			padding: 3rem;
		}
		.login-image {
			background: linear-gradient(45deg, #2193b0, #6dd5ed);
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.form-control {
			border-radius: 10px;
			padding: 12px;
			border: 1px solid #e1e1e1;
		}
		.btn-primary {
			background: linear-gradient(45deg, #2193b0, #6dd5ed);
			border: none;
			border-radius: 10px;
			padding: 12px;
			font-weight: 500;
			width: 100%;
			margin-top: 20px;
		}
		.logo img {
			margin-bottom: 2rem;
			border-radius: 15px;
		}
	</style>
</head>
<body>
	<div class="login-container">
		<div class="row g-0">
			<div class="col-md-6">
				<div class="login-form-container">
					<div class="logo text-center">
						<img src="dist/img/log.jpg" alt="Logo" height="100px">
					</div>
					<h3 class="text-center mb-4">Welcome Back</h3>
					
					<form action="app/action/login.php" method="post">
						<?php
						if (isset($_SESSION['login_error'])) {
							echo "<div class='alert alert-danger text-center mb-4'>" . $_SESSION['login_error'] . "</div>";
						}
						?>
						<div class="mb-4">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" placeholder="Enter your username" required>
						</div>
						
						<div class="mb-4">
							<label class="form-label">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter your password" required>
						</div>
						
						<div class="mb-4">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="remember">
								<label class="form-check-label" for="remember">Remember me</label>
							</div>
						</div>
						
						<button type="submit" name="admin_login" class="btn btn-primary">
							Sign In
						</button>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div class="login-image" style="height: 100%;">
					<img src="assets/images/login.png" alt="Login illustration" style="width: 100%; height: 100%; object-fit: cover; padding: 2rem;">
				</div>
			</div>
		</div>
	</div>
</body>
</html>