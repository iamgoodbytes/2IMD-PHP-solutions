<?php
    session_start();
    if(isset($_SESSION["username"])){
        //Welcome
        echo "Welcome " . $_SESSION["username"];
    } else {
        //Gebruiker wegsturen
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>The private dashboard</h1>
</body>
</html>