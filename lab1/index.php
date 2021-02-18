<?php
const distance = 100;

$checkins = [
    [
        'avatar' => 'https://images.pexels.com/photos/1220757/pexels-photo-1220757.jpeg?cs=srgb&dl=pexels-mentatdgt-1220757.jpg&fm=jpg',
        'name' => 'Jesse',
        'company' => 'Assembly 3.0',
        'city' => 'San Fransisco',
        'country' => 'CA',
        'message' => 'Le work.',
        'picture' => '',
        'distance' => 10
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/2785219/pexels-photo-2785219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Michal',
        'company' => 'Voxer',
        'city' => 'San Fransisco',
        'country' => 'CA',
        'message' => '',
        'picture' => '',
        'distance' => 8
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/428328/pexels-photo-428328.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Petr',
        'company' => 'ROXY NoD',
        'city' => 'Prague',
        'country' => 'Czech Republic',
        'message' => '',
        'picture' => '',
        'distance' => 22
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/4061379/pexels-photo-4061379.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Jaroslav',
        'company' => 'Brno Hlavni nadrazi',
        'city' => 'Brno',
        'country' => 'Czech Republic',
        'message' => '',
        'picture' => '',
        'distance' => 28
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/3370021/pexels-photo-3370021.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Jesse',
        'company' => 'The Mill',
        'city' => 'San Fransisco',
        'country' => 'CA',
        'message' => 'Loving the view',
        'picture' => 'https://images.pexels.com/photos/3022417/pexels-photo-3022417.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
        'distance' => 2
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/1220757/pexels-photo-1220757.jpeg?cs=srgb&dl=pexels-mentatdgt-1220757.jpg&fm=jpg',
        'name' => 'Jesse',
        'company' => 'Assembly 3.0',
        'city' => 'San Fransisco',
        'country' => 'CA',
        'message' => 'Le work.',
        'picture' => '',
        'distance' => 10
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/2785219/pexels-photo-2785219.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Michal',
        'company' => 'Voxer',
        'city' => 'San Fransisco',
        'country' => 'CA',
        'message' => '',
        'picture' => '',
        'distance' => 8
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/428328/pexels-photo-428328.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Petr',
        'company' => 'ROXY NoD',
        'city' => 'Prague',
        'country' => 'Czech Republic',
        'message' => '',
        'picture' => '',
        'distance' => 22
    ],
    [
        'avatar' => 'https://images.pexels.com/photos/4061379/pexels-photo-4061379.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500',
        'name' => 'Jaroslav',
        'company' => 'Brno Hlavni nadrazi',
        'city' => 'Brno',
        'country' => 'Czech Republic',
        'message' => 'It has been a wonderful trip so far',
        'picture' => '',
        'distance' => 28
    ]
];
    

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swarm App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once('header.inc.php');?>
    <main>
        <?php
        foreach($checkins as $checkin){
            if($checkin['distance']<=distance){
                echo '<div class="checkin">';
                echo '<div class="avatar">';
                echo '<img src="'.$checkin['avatar'].'" alt="avatar of '.$checkin['name'].'">';
                echo '</div>';
                echo '<div class="info">';
                echo '<p class="name">'.$checkin['name'].'</p>';
                echo '<p class="company">'.$checkin['company'].'</p>';
                echo '<p class="location">'.$checkin['city'].', '.$checkin['country'].'</p>';
                if(!empty($checkin['message'])){
                    echo '<p class="post">'.$checkin['message'].'</p>';
                }
                if(!empty($checkin['picture'])){
                    echo '<img src="'.$checkin['picture'].'" alt="picture from '.$checkin['name'].'">';
                }
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </main>
    <?php require_once('footer.inc.php');?>
    
</body>
</html>
