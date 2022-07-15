<?php

	session_start();


		
	if(isset($_SESSION['email']) & isset($_SESSION['password']) & $_SESSION['user_type']=="admin" ){
		
		echo "<script>window.location.replace('admin_dashboard.php')</script>";
	
	}elseif(isset($_SESSION['email']) && isset($_SESSION['password']) && $_SESSION['user_type']=="employee" ){
	
		echo "<script>window.location.replace('employee_dashboard.php')</script>";

	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - HRMS admin template</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		    </head>
    <body class="account-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<!-- <a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a> -->
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<div id="alert"></div>
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>

							<!-- Account Form -->
							<!-- <form action="index.html"> -->
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="text" id="user_email" name="email">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" id="user_password" name="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit" id="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>Don't have an account yet? <a href="register.php">Register</a></p>
								</div>
							<!-- </form> -->
							<!-- /Account Form -->

						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		<script>
			$(document).ready(function () {
				$("#submit").click(function (e) { 
					e.preventDefault();
					$.ajax({
					type: "POST",
					url: "../controller/LoginController.php",
					data: {
						email:$("#user_email").val(),
						password:$("#user_password").val(),
						action:"login"
					},
					// dataType: "dataType",
					success: function (response) {
						$("#user_email").val('');
						$("#user_password").val('');
						if(response.status=="failed"){
							$('#alert').html("<div class='alert alert-success'>"+response+"</div>");
						}
					},
				});
				});
			});
		</script>

    </body>
</html>
