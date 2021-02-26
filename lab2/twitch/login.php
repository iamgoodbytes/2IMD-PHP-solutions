<?php
//Set loggedin to false
$loggedin = false;

session_start();

if(isset($_SESSION["username"])){
  $loggedin = true;
}


//Function to check if username and password are correct
function canLogin($username, $password)
{
  $conn = new PDO("mysql:host=localhost;dbname=test", "admin", "");
  $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
  $statement->bindValue(":email", $username);
  $statement->execute();
  $user = $statement->fetch();
  $hash = $user["password"];
  
  if(!$user){
    return false;
  }

  if( password_verify($password, $hash)){
    return true;
  }
  else{
    return false;
  }
  
}

//Check if the form is sended
if (!empty($_POST)) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  //Username and password inloggen
  if (canLogin($username, $password)) {
    //Session start with username in it
    $_SESSION["username"] = $username;
    //Fully logedin so set loggedin to true
    $loggedin = true;
    //Go to login.php => nav visible and login screen gone
  } else {
    //ERROR
    $error = true;
  }
}

//URL reading page
if ($loggedin){
  if(isset($_GET["page"])){
    $page = $_GET["page"];
  }else{
    $page = "Welcome";
  }

  switch($page){
    case "browser":
      $page = "Browse some streamers 🐱‍👤";
      break;
    case "getdesktop":
      $page = "You want to get the desktop version?"  ;
      break;
    case "tryprime":
      $page = "You want to try Prime?";
      break;
    default:
      $page = "Welcome to Twitch !";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CodePen - twitch login</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <header>

    <?php if ($loggedin == true) : ?>
      <nav class="nav">
        <a href="?page=browser">Browse</a>
        <a href="?page=getdesktop">Get desktop</a>
        <a href="?page=tryprime">Try prime</a>
        <a href="#" class="loggedIn">
          <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387" alt=""></div>

          <?php if (isset($_SESSION["username"])) : ?>
            <h3 class="user--name"><?php echo $_SESSION["username"]; ?> </h3>
          <?php else : ?>
            <h3 class="user--name">Username here</h3>
          <?php endif; ?>

          <span class="user--status">Watching dakotaz</span>
        </a>
        <a href="logout.php">Log out?</a>
      </nav>
    <?php endif; ?>

  </header>

  <div id="app">
    <form action="" method="post">

      <?php if ($loggedin == true) : ?>
        <h1><?php echo $page ?></h1>
      <?php endif; ?>

      <?php if ($loggedin == false) : ?>
        <h1>Log in to Twitch</h1>
        <nav class="nav--login">
          <a href="#" id="tabLogin">Log in</a>
          <a href="#" id="tabSignIn">Sign up</a>
        </nav>

        <?php if (isset($error)) : ?>
          <div class="alert">That password was incorrect. Please try again</div>
        <?php endif; ?>

        <div class="form form--login">
          <label for="username">Username</label>
          <input type="text" id="username" name="username">

          <label for="password">Password</label>
          <input type="password" id="password" name="password">
        </div>
      <?php endif; ?>

      <div class="form form--signup hidden">
        <label for="username2">Username</label>
        <input type="text" id="username2">

        <label for="password2">Password</label>
        <input type="password" id="password2">

        <label for="email">Email</label>
        <input type="text" id="email">
      </div>

      <?php if ($loggedin == false) : ?>
        <input type="submit" value="Log in" class="btn">
      <?php endif; ?>

    </form>
  </div>
  <!-- partial -->

</body>

</html>