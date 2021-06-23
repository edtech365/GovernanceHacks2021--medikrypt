<?php
	require_once("./system/handler.php");
	if(isset($_POST["btnLogin"])){

		if(isset($_POST["username"]) && isset($_POST["password"])){
			session_start();
			$_SESSION["isLogin"] = true;
			 if(strtolower($_POST["username"]) == "tester@hospital.com"){
				$_SESSION["isWho"] = "hospital";
			}else if(strtolower($_POST["username"]) == "tester@agency.com"){
				$_SESSION["isWho"] = "agency";
			}else{
				$_SESSION["isWho"] = "admin";
			}
			
			header("Location: ./");

		}else{
			echo'<script> alert("Ooooops! Either username or password is incorrect!!"); </script>';
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Login - MediKrypt</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="../assets/images/logo/logo-light.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access your dashboard</p>
								
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" required name="username" type="text" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" required type="password" name="password" placeholder="Password">
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" name="btnLogin" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="../">Home Page</a></div>
								
							</div>
                        </div>
					</div>
					<div class="text-center dont-have">Copyright © 2020 MediKrypt PLC. <br>Developed by <a href="#">MediKrypt Team</a></div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script src="assets/js/main.js"></script>
		
    </body>
</html>