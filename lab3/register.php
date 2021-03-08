<?php 

	session_start();

	if(!empty($_POST)) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		$password_conf = $_POST["password_conf"];

		if(strlen($password) >= 8) {
			if($password === $password_conf) {

				$options = [
					"cost" => 14
				];
				$password = password_hash($password, PASSWORD_DEFAULT, $options);
				
				include_once("database/connection.php");
				$query = $conn->prepare("insert into users (email, password) values (:email, :password)");
				$query->bindValue(":email", $email);
				$query->bindValue(":password", $password);
				$query->execute();

				$_SESSION["email"] = $email;
				$_SESSION["loggedin"] = true;

				header("Location: index.php");
				die();

			} else {
				$error = true;
				$error_match = true;
			}
		} else {
			$error = true;
			$error_char = true;
		}
	}

?><!DOCTYPE html>
<html>
<head>
	<title>Spotify | Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div id="header">
		<div class="logo"></div>
	</div>
	<div id="main">
		<h1>Register</h1>
		<div class="loginfb"></div>
		<div class="linel"></div>
		<div class="liner"></div>
		<div id="form">
			<form method="post" action>
				<input name="email" placeholder="Email" type="email" required autofocus />
				<input name="password" placeholder="Password" type="password" required />
				<input name="password_conf" placeholder="Confirm Password" type="password" required />
				<h5>
					Remember
				</h5>
				<input class="btn-toggle btn-toggle-round" id="btn-toggle-1" name="remember" type="checkbox" />
				<label for="btn-toggle-1"></label>
				<input name="register" type="submit" value="Register"/>
			</form>
		</div>
		
	</div>

	<?php if(isset($error)): ?>
	<div class="user-messages-area">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<ul>
				<?php if(isset($error_match)): ?>
				<li>The passwords you've entered, don't match.</li>
				<?php elseif(isset($error_char)): ?>
				<li>Your password should at least be 8 characters long.</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>