<!DOCTYPE html>
<?php
	session_start();
?>
<html lang = "eng">
	<head>
		<title>URS Student Management System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/URS.png" width = "50px" height = "50px"/>
					<p style="color:white"class = "navbar-text pull-right">URS Student Management System</p>
				</div>
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row row-centered">
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-4 col-centered">
					<div style="width:400px; margin-right:50px" class = "panel panel-primary">
						<div style="background-color:royalblue"class = "panel-heading">
							<h4 style="font-weight: bold; text-align: center">Admin Login</h4>
						</div>
						<div style="width:400px"class = "panel-body">
							<form enctype = "multipart/form-data">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button style="background-color:royalblue; font-weight: bold;"type = "button" class = "btn btn-primary btn-block" id = "login_admin">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>