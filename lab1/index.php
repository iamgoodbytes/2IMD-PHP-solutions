<?php
/*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken
        --- Done

        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */
$content = [
    [
        "username" => "Thomas",
        "userpicture" => "image-1.jpg",
        "placename" => "Assembly",
        "location" => "San Francisco, CA",
        "comment" => "",
        "picture" => "picture-1.png"
    ],
    [
        "username" => "Jess",
        "userpicture" => "image-2.jpg",
        "placename" => "Home",
        "location" => "Madagascar",
        "comment" => "Nice to relax",
        "picture" => ""
    ],
    [
        "username" => "Rick",
        "userpicture" => "image-3.jpg",
        "placename" => "Class",
        "location" => "Hawaï, USA",
        "comment" => "",
        "picture" => ""
    ],
    [
        "username" => "Chloé",
        "userpicture" => "image-4.jpg",
        "placename" => "Postilion",
        "location" => "Kortrijk, BE",
        "comment" => "Tis hier gezellig met vriendelijke baas",
        "picture" => "picture-2.png"
    ],
    [
        "username" => "Siska",
        "userpicture" => "image-5.jpg",
        "placename" => "Atomium",
        "location" => "Brussel, BE",
        "comment" => "Klaartje is getrouwd",
        "picture" => ""
    ],
    [
        "username" => "Michiel",
        "userpicture" => "image-6.jpg",
        "placename" => "Eifeltoren",
        "location" => "Parijs, FR",
        "comment" => "Pils is fris",
        "picture" => ""
    ]
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include_once "header.inc.php" ?>
    <?php foreach ($content as $data) : ?>
        <div class="checkin">
            <img class="userpicture" src="images/<?php echo $data["userpicture"]; ?>" alt="user picture">
            <div class="info">
                <p class="username"><?php echo $data["username"] ?></p>
                <p class="placename"><?php echo $data["placename"] ?></p>
                <p class="location"><?php echo $data["location"] ?></p>
                <?php if (!empty($data["comment"])): ?>
                <p class="comment"><?php echo $data["comment"] ?></p>
                <?php endif; ?>
                <?php if (!empty($data["picture"])): ?>
                <img class="placepicture" src="images/<?php echo $data["picture"]; ?>" alt="place picture">
                <?php endif; ?>
            </div>
        </div>
        <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png
        ?>
    <?php endforeach; ?>
    <?php include_once "footer.inc.php" ?>
    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen
    ?>
</body>

</html>