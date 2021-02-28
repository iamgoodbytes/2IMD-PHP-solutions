<?php 
	include("database/connection.php");

    if(!empty($_POST)){
        $email = $_POST['email'];

		$query = $database->prepare( "SELECT email FROM users WHERE email = ?" );
		$query->bindValue( 1, $email );
		$query->execute();

		if( $query->rowCount() > 0 ) { # If rows are found for query
			$emailError = True;
	    } else {

			$password = $_POST['password'];
			$password_conf = $_POST['password_conf']; 
			$options = [
				"cost" => 13,
			];

			/*var_dump($email);
			var_dump($password);
			var_dump($password_conf);*/

			if(strlen($password) < 5){
				$passwordLengthError = true;
			} else {
				if ($password == $password_conf){
					$password = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);
					$query = $database->prepare("insert into users (email,password) values (:email,:password)");
					$query->bindValue(':email',$email);
					$query->bindValue(':password',$password);
					$query->execute();
					header('Location: login.php');
				} else {
					$PasswordMatchError = true;
				}
			}
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
				<input name="email" placeholder="Email" type="email" required autofocus />
				<input name="password" placeholder="Password" type="password" required />
				<input name="password_conf" placeholder="Confirm Password" type="password" required />
				<p>Password contain 6 character or more</p>
				<h5>
					Remember
				</h5>
				<input class="btn-toggle btn-toggle-round" id="btn-toggle-1" name="remember" type="checkbox" />
				<label for="btn-toggle-1"></label>
				<input name="register" type="submit" value="Register" />
				<p>Have an account already?</p>
				<a href="login.php">Login here.</a>
			</form>
		</div>
		
	</div>
	<?php if(isset($emailError)): ?>
		<div class="user-messages-area">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<ul>
					<li>Email already exists.</li>
				</ul>
			</div>
		</div>
	<?php elseif (isset($PasswordMatchError)): ?>
		<div class="user-messages-area">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<ul>
					<li>Passwords do not match.</li>
				</ul>
			</div>
		</div>
	<?php elseif(isset($passwordLengthError)): ?>
		<div class="user-messages-area">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<ul>
					<li>Passwords must contain 6 Characters.</li>
				</ul>
			</div>
		</div>
	<?php endif; ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>






<!--______________________________Sources________________________________-->

<!--Password strength-->
<!--https://www.codexworld.com/how-to/validate-password-strength-in-php/-->

<!--already Registered-->
<!--https://stackoverflow.com/questions/15287011/how-to-check-if-email-is-already-registered-->


