<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<style>
	html,body {
		height: 100%;
	}	
</style>
</head>

<body>
	<div class="container h-100 row align-items-center">
		<div class="col-md-4 offset-6" >
		<h1 class="mb-5">Teacher Login System</h1>
	<form action="t_login_submit.php" method="POST">
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" class="username" placeholder="Username">
	<label for="username">Password:</label>
	<input type="password" name="password" id="password" class="password mt-3" placeholder="Password">
		<br>
		<?php
		echo($_COOKIE[msg]);
		setcookie("msg","",time()-10);
		?>
		<button class="btn btn-danger mt-2 offset-8" type="submit">Login</button>
		</div>
			</form>
	</div>
</body>
</html>