<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Register - HRMS admin template</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
							<h3 class="account-title">Register</h3>
							<p class="account-subtitle">Access to our dashboard</p>

							<!-- Account Form -->

								<div class="form-group">
									<label>Name</label>
									<input class="form-control" required id="uname" type="text" name="name">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" required id="uemail" type="text" name="email">
								</div>
								<div class="form-group">
									<label>Mobile</label>
									<input class="form-control" required id="umobile" type="text" name="mobile">
								</div>

								<div class="form-group">
									<label>Password</label>
									<input class="form-control" required id="upassword" type="password" name="password">
								</div>
								<div class="form-group">
									<label>Repeat Password</label>
									<input class="form-control" required id="ucpassword" type="password" name="cpassword">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" id="register" type="submit">Register</button>
								</div>
								<div class="account-footer">
									<p>Already have an account? <a href="login.html">Login</a></p>
								</div>

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
			$(document).ready(function(){
				$("#register").click(function () {
					uname=$("#uname").val();
					uemail=$("#uemail").val();
					umobile=$("#umobile").val();
					upassword=$("#upassword").val();
					ucpassword=$("#ucpassword").val();
						$.ajax({
						type: "POST",
						url: "../controller/RegisterController.php",
						data: {
							uname:uname,
							uemail:uemail,
							umobile:umobile,
							upassword:upassword,
							ucpassword:ucpassword,
							action:"register",
						},
						// dataType: "dataType",
						success: function (response) {

								$("#alert").html("<div class='alert alert-success'>"+response+"</div>");
							},
							error: function (error) {
							$("#alert").html("<div class='alert alert-danger'>"+eval(error)+"</div>");
   							//  alert('error; ' + eval(error));
							}
					});
					});
			});
		</script>
    </body>
</html>
