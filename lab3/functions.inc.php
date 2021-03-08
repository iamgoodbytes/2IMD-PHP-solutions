<?php

    function canLogin($email, $password) {

        include_once("database/connection.php");
        $query = $conn->prepare("select * from users where email = :email");
        $query->bindValue(":email", $email);
        $query->execute();

        $user = $query->fetch();
        $hash = $user["password"];

        if(!$user) {
            return false;
        }
        
        if(password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
        
    }

?>