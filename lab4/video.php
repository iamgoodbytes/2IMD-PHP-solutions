<?php
include_once(__DIR__ . '/helpers/Security.php');
include_once (__DIR__.'/classes/Video.php');
include_once (__DIR__.'/classes/User.php');
Security::onlyLoggedInUsers();
if (!empty($_GET)){
   $video =  Video::getByid($_GET['id']);
   $username = User::getUsernamebyId($_GET['id']);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="container">
<?php include_once(__DIR__ . "/partials/nav.inc.php"); ?>

<main>
    <article class="mb-4">
        <div class="youtube-video-container">
            <iframe width="100%" height="489" src="<?php echo $video['src']?>" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
        <h5 class="mt-2 mb-0"><?php echo $video['title']?></h5>
        <a href="feed.php?filteruser=<?php echo $video['user_id']?>"><?php echo $username?></a>
        <form method="post" action="">
            <div class="form-group">
                <label for="comment">Comment</label>
                <input type="text" name="comment" id="comment">
                <input type="submit" class="btn btn-primary" value="Comment">
            </div>
        </form>

        <ul>
            <li><strong>email</strong> - lmao! 🤣</li>
            <li><strong>email</strong> - lmao! 🤣</li>
        </ul>

    </article>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>