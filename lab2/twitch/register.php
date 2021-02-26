<?php
    if(!empty($_POST)){
        $email = $_POST["username"];
        $options = [
            'cost' => 12,
        ];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT, $options);

        $conn = new PDO("mysql:host=localhost;dbname=test", "admin", "");
        $query = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");        
        $query->bindValue(":email", $email);
        $query->bindValue(":password", $password);
        $query->execute();
        /*$conn = new mysqli("localhost", "admin", "", "test");
        $result = $conn->query("INSERT INTO users (email, password) VALUES ('".$conn->real_escape_string($email)."', '".$conn->real_escape_string($password)."')");
        var_dump($result);
        */
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - twitch sign up</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <div id="app">
        <form action="" method="post">

            <h1>Log in to Twitch</h1>
            <nav class="nav--login">
                <a href="#" id="tabLogin">Log in</a>
                <a href="#" id="tabSignIn">Sign up</a>
            </nav>

            <div class="alert hidden">That password was incorrect. Please try again</div>

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


            <input type="submit" value="Sign Up" class="btn">


        </form>
    </div>
    <!-- partial -->

</body>

</html>