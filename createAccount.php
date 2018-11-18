<html>
	<head>
		<meta charset = "utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name = "viewport" content = "width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<title>Welcome to Flint!</title>
		<style>
			.logoWrapper {
				margin: 0 auto;
    			text-align: center;
			}
			.logo {
				width: 20%;
			}
			.title {
				text-align: center;
				font-weight: bold;
				font-size: 3em;
			}
		</style>
	</head>
	<body>
		<form action="" method="post" class="form-horizontal">
			<div class="logoWrapper">
				<img src="logo.png" class="logo" alt="Flint logo">
			</div>
			<div class="title">
				Create Your Account! <br>
			</div>
			<strong>Username:</strong>
			<input type="text" name="username" class="form-control">
			<strong>Password:</strong>
			<input type="text" name="password" class="form-control">

			<input type="submit" name="submit" class="form-control">
			<button onclick=location.href='homepage.php' type="button" class="form-control"> Back </button>
		</form>
	</body>
</html>

<?php
	if (isset($_POST["submit"])) {
		$db_connection = new mysqli("localhost", "Flintadmin", "Flint", "Flint");
		if ($db_connection->connect_error) {
			die($db_connection->connect_error);
		} else {
			$name = trim($_POST['username']);
			$password = trim($_POST['password']);
			$query = "insert into users name, password values '$name' '$password'";
			$result = $db_connection->query($query);
			if ($result) {
				header("Location: homepage.php");
			} else {
				print_r($result);
				echo '<h3 style="color:red;">Unable to create account.</h3>';
			}
		}
	}
?>