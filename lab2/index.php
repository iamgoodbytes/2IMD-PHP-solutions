<?php
    
    function canLogin($username,$password) {

        if ($username === "Development4" && $password == "IMD") {
            return true; 
        } else { 
            return false;
        } 
    }

    if (!empty($_POST)) {
        //er is verzonden!
        $username = $_POST['username'];
        $password = $_POST['password']; 
        if (canLogin($username,$password)){
        
            //login
            session_start();
            $_SESSION["username"] = $username;
    
        } else {
    
            $error = true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css
    ">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="nav">
        <a href="#">Browse</a>
        <a href="#">Get desktop</a>
        <a href="#">Try prime</a>
        <a href="#" class="loggedIn">
            <?php if (isset($_SESSION['username'])): ?>
                <div class="user--avatar"><img src="images/php.png" alt="profile image"></div>
                 <h3 class="user--name"><?php echo $_SESSION['username'] ?></h3>
                 <span class="user--status">Watching Goodbytes</span>
            <?php else: ?>
                <div class="user--avatar"><img src="images/guest.png" alt="Guest image"></div>
                <h3 class="user--name" style="margin:auto;">Not logged in</h3>
            <?php endif; ?>
        </a>
        <a href="index.php">Log out?</a>
    </nav>    
    </header>

    <div id="app">
    <?php if(isset($_SESSION)): ?>

        <div id="loginForm">
            <img src="images/php.png" style="display: block; margin: 0 auto; width: 150px;" alt="profile Image">
            <!-- Inline style gebruikt omdat hij de CSS niet uitleest eens de Session gestart is, Werkt in HTML en CSS alleen Perfect -->
            <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        </div>

    <?php else: ?>

        <form id="loginForm" action="index.php" method="post">
            <h1>Log in to Twitch</h1>
            <nav class="nav--login">
                <a href="#" id="tabLogin">Log in</a>
                <a href="#" id="tabSignIn">Sign up</a>
            </nav>

        <?php if(isset($error)): ?>
                <div class="alert">That password was incorrect. Please try again</div>
        <?php endif; ?>

        <div class="form form--login">
            <label for="username">Username</label>
            <input type="text" id="username" name="username">
        
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div class="form form--signup hidden">
            <label for="username2">Username</label>
            <input type="text" id="username2">
        
            <label for="password2">Password</label>
            <input type="password" id="password2">
            
            <label for="email">Email</label>
            <input type="text" id="email">
        </div>
        
        <a href="" class="btn" id="btnSubmit" onclick='document.forms["loginForm"].submit(); return false;'>Log In</a>
        </form>
    <?php endif; ?>

    </div>
    
    
</body>
</html>