<?php
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */

    //todo2
    define("MAX_DISTANCE", 5000000);

    //todo1
    $userCheckins = [
        [
            "img_profile" => "https://bit.ly/2ZowHfQ",
            "sticker" => "",
            "username" => "Jesse",
            "checkin" => "Assembly 3.0",
            "location" => "San Francisco, CA",
            "comment" => "Le work.",
            "image" => "",
            "distance" => ""
        ],
        [
            "img_profile" => "",
            "sticker" => "https://bit.ly/2NeKhjl",
            "username" => "Michal",
            "checkin" => "Voxer",
            "location" => "San Francisco, CA",
            "comment" => "",
            "image" => "",
            "distance" => ""
        ],
        [
            "img_profile" => "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "sticker" => "",
            "username" => "Petr",
            "checkin" => "Roxy/NoD",
            "location" => "Prague, Czech Republic",
            "comment" => "",
            "image" => "",
            "distance" => ""
        ],
        [
            "img_profile" => "",
            "sticker" => "",
            "username" => "Kyle",
            "checkin" => "Musuée du Louvre",
            "location" => "Paris, France",
            "comment" => "",
            "image" => "https://www.museumnext.com/wp-content/uploads/2019/01/louvre.jpg",
            "distance" => ""
        ],
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php    include 'header.inc.php';?>
    
    <div id="posts">
    
    <?php
    foreach ($userCheckins as $userCheckin) {
        foreach ($userCheckin as $attribute => $value) {
            switch($attribute){
                case "img_profile":

                    if(empty($value)){
                        $img_profile = "https://t4.ftcdn.net/jpg/03/46/93/61/360_F_346936114_RaxE6OQogebgAWTalE1myseY1Hbb5qPM.jpg";
                    } else{
                        $img_profile = $value;
                    }
                    break;

                case "sticker":
                    $sticker = $value;
                    break;

                case "username":
                    $username = $value;
                    break;

                case "checkin":
                    $checkin = $value;
                    break;

                case "location":
                    $location = $value;
                    break;

                case "comment":
                    $comment = $value;
                    break;

                case "image":
                    $image = $value;
                    break;

            }
        }
        echo 
        "<div class=\"post_wrapper\">
        <div class=\"image_wrapper\">
            <img src=\"". $img_profile ."\" class=\"img_profile\">
            ".(!empty($sticker)? "<img src=\"". $sticker ."\" class=\"img_sticker\">":"")."
        </div>
        
        <div class=\"text_wrapper\">
            <p class=\"username\">". $username ."</p>
            <p class=\"checkin\">". $checkin ."</p>
            <p class=\"location\">". $location ."</p>
            <p class=\"comment\">". $comment ."</p>
            ".(!empty($image)? "<img src=\"".$image."\" class=\"img_post\"":"")."
            <div class=\"divider\"></div>
        </div>
        </div>";
    }
    ?>

    </div>
    <?php include 'footer.inc.php'?>
</body>
</html>