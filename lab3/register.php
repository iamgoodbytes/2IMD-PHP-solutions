<?php
if (!empty($_POST)) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$passwordconf = $_POST["password_conf"];

	if ($password === $passwordconf) {
		$options = [
			'cost' => 15,
		];
		$password = password_hash($password, PASSWORD_DEFAULT, $options);
		$conn = new PDO("mysql:host=localhost;dbname=test", "admin", "");
		$query = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
		$query->bindValue(":email", $email);
		$query->bindValue(":password", $password);
		$query->execute();
	} else {
		$error = "Passwords don't match";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
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
				<input name="email" placeholder="Email" type="email" required autofocus /><input name="password" placeholder="Password" type="password" required /><input name="password_conf" placeholder="Confirm Password" type="password" required />
				<h5>
					Remember
				</h5>
				<input class="btn-toggle btn-toggle-round" id="btn-toggle-1" name="remember" type="checkbox" /><label for="btn-toggle-1"></label><input name="register" type="submit" value="Register" />
			</form>
		</div>

	</div>

	<?php if (isset($error)) : ?>
		<div class="user-messages-area">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<ul>
					<li><?php echo $error; ?></li>
				</ul>
			</div>
		</div>
	<?php endif; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>