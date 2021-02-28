<?php 
    function canLogin($username,$password) {

        include("database/connection.php");
        $query = $database->prepare('select * from users where email = :email');
        $query->bindValue(":email", $username);
        $query->execute();
        $user = $query->fetch();

        if (!$user) {
            return false;
        }

        $Password_verify = $user['password'];
        if (password_verify($password, $Password_verify)){
            return true; 
        } else {
            return false; 
        }
    }
/*
    function fetchArtists(){
        include("database/connection.php");
        $query = $database->prepare("select * from artists");
        $query->execute();
        $artist = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!$artist) {
            return false;
        }
    }
*/

    function fetchPlaylists(){
        include("database/connection.php");
        $query = $database->prepare("select * from playlists");
        $query->execute();
        
    }
?>