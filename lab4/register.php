<?php 
    if(!empty($_POST)){
        try {
            include_once(__DIR__ . "/classes/User.php");
            
            // create a new user object
            $user = new User();

            // use setters to fill in data for this user
            $user->setEmail($_POST['email']);
            $user->setPassword(($_POST['password']));

            // register the user by executing a query in the database
            $user->register();
            
            // start a session and redirect the user to feed.php
            session_start();
            $_SESSION['user'] = $user->getEmail();
            header("Location: feed.php");
        }
        catch(Throwable $error) {
            // if any errors are thrown in the class, they can be caught here
            $error = $error->getMessage();
        }

    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="container">
<?php include_once(__DIR__ . "/partials/nav.inc.php"); ?>

<main>
<?php if(isset($error)): ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>

<form method="post" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <div id="passwordHelp" class="form-text">Passwords must be at least 5 characters long</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign me up</button>
</form>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>