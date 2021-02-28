<!DOCTYPE html>
<html>
<head>
  <title>Artist</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="css/artist.css">
</head>
<body>
  <?php 
  require_once("header.php");
  ?>

<section class="content"><div class="content__left"><section class="navigation">
  
<!-- / -->
<!-- Your Music -->
<div class="navigation__list"><div class="navigation__list__header"
 role="button"
 data-toggle="collapse"
 href="#yourMusic"
 aria-expanded="true"
 aria-controls="yourMusic">Your Music
</div>
<div class="collapse in" id="yourMusic">
<a href="#" class="navigation__list__item"><i class="ion-ios-musical-notes"></i><span>Albums</span>
</a>
<a href="#" class="navigation__list__item"><i class="ion-person"></i><span>Artists</span>
</a>

</div>
</div>
<!-- / -->
<!-- Playlists -->
<div class="navigation__list"><div class="navigation__list__header"
 role="button"
 data-toggle="collapse"
 href="#playlists"
 aria-expanded="true"
 aria-controls="playlists">Playlists
</div>
<div class="collapse in" id="playlists">

<a href="#" class="navigation__list__item"><i class="ion-ios-musical-notes"></i><span>Playlist name goes here</span></a>

</a>
</div>
</div>
<!-- / -->
</section>

  <section class="playlist"><a href="#">
   <i class="ion-ios-plus-outline"></i>New Playlist
 </a>
</section>
<section class="playing"><div class="playing__art"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/cputh.jpg" alt="Album Art" /></div>
 <div class="playing__song"><a class="playing__song__name">Some Type of Love</a><a class="playing__song__artist">Charlie Puth</a></div>
 <div class="playing__add"><i class="ion-checkmark"></i></div>
</section>
</div>
<div class="content__middle"><div class="artist is-verified"><div class="artist__header"><div class="artist__info"><div class="profile__img"><img src="https://loremflickr.com/320/320/1?lock=1" alt="Artist name here" /></div>
<div class="artist__info__meta"><div class="artist__info__type">Artist</div><div class="artist__info__name">Eveline Collins PhD</div><div class="artist__info__actions"><button class="button-dark"><i class="ion-ios-play"></i>Play
</button>
<button class="button-light">Follow</button><button class="button-light more"><i class="ion-ios-more"></i></button>
</div>
</div>
</div>
<div class="artist__navigation"><ul class="nav nav-tabs" role="tablist"><li role="presentation" class="active"><a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a></li>
 <li role="presentation"><a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Artists</a></li>
 <!--<li role="presentation"><a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a></li>-->
</ul>

 </div>
</div>
<div class="artist__content"><div class="tab-content"><!-- Overview -->
 <div role="tabpanel" class="tab-pane active" id="artist-overview"><div class="overview">
   <div class="overview__albums"><div class="overview__albums__head"><span class="section-title">Albums</span><span class="view-type"><i class="fa fa-list list active"></i><i class="fa fa-th-large card"></i></span>
   </div>
   
      <div class="album">
       <div class="album__info"><div class="album__info__art"><img src="https://loremflickr.com/320/320/1?lock=100" alt="When It's Dark Out" /></div>
       <div class="album__info__meta"><div class="album__year">1999</div><div class="album__name">Miss Mellie Hoeger Sr.</div><div class="album__actions"><button class="button-light save">Save</button><button class="button-light more"><i class="ion-ios-more"></i></button>
       </div>
     </div>
   </div>
   <div class="album__tracks"><div class="tracks">
     <div class="tracks__heading"><div class="tracks__heading__number">#</div><div class="tracks__heading__title">Song</div><div class="tracks__heading__length"><i class="ion-ios-stopwatch-outline"></i></div>
     <div class="tracks__heading__popularity"><i class="ion-thumbsup"></i></div>
   </div>
  

   <div class="track">
     <div class="track__number">1</div><div class="track__added"><i class="ion-checkmark-round added"></i></div>
     <div class="track__title">Track title here</div><div class="track__explicit"><span class="label">Explicit</span></div>
     <div class="track__length">1:11</div><div class="track__popularity"><i class="ion-arrow-graph-up-right"></i></div>
   </div>
   
</div>
</div>  
</div>

</div>
</div>
</div>
<!-- / -->
<!-- Related Artists -->
<div role="tabpanel" class="tab-pane" id="related-artists">
  <div class="media-cards">
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Hoodie Allen</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/mikestud_large.jpg);">
        <i class="ion-ios-play"></i> 
      </div>
      <a class="media-card__footer">Mike Stud</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/drake_large.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Drake</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/jcole_large.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">J. Cole</a>  
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/bigSean_large.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Big Sean</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/wiz.jpeg);">

        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Wiz Khalifa</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/yonas.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Yonas</a>
    </div>
    <div class="media-card">
      <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/childish.jpg);">
        <i class="ion-ios-play"></i>
      </div>
      <a class="media-card__footer">Childish Gambino</a>
    </div>
  </div>
</div>
<!-- / -->
<!-- About // Coming Soon-->
<!--<div role="tabpanel" class="tab-pane" id="artist-about">About</div>-->
<!-- / -->
</div>
</div>
</div>
</div>

<div class="content__right">
  <div class="social">
    <div class="friends">
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Sam Smith
      </a>
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Tarah Forsyth
      </a>
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Ricahrd Tomkins
      </a>
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Tony Russo
      </a>
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Alyssa Marist
      </a>
      <a href="#" class="friend">
        <i class="ion-android-person"></i>
        Ron Samson
      </a>
    </div>
    <button class="button-light">Find Friends</button>
  </div>
</div>
</section>

<section class="current-track">
  <div class="current-track__actions">
    <a class="ion-ios-skipbackward"></a>
    <a class="ion-ios-play play"></a>
    <a class="ion-ios-skipforward"></a>
  </div>
  <div class="current-track__progress">
    <div class="current-track__progress__start">0:01</div>
    <div class="current-track__progress__bar">
      <div id="song-progress"></div>
    </div>
    <div class="current-track__progress__finish">3:07</div>
  </div>
  <div class="current-track__options">
    <a href="#" class="lyrics">Lyrics</a>
    <span class="controls">
      <a href="#" class="control">
        <i class="ion-navicon"></i>
      </a>
      <a href="#" class="control">
        <i class="ion-shuffle"></i>
      </a>
      <a href="#" class="control">
        <i class="fa fa-refresh"></i>
      </a>
      <a href="#" class="control devices">
        <i class="ion-iphone"></i>
        <span>Devices Available</span>
      </a>
      <a href="#" class="control volume">
        <i class="ion-volume-high"></i>
        <div id="song-volume"></div>
      </a> 
    </span>
  </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.js"></script>
<script type="text/javascript" src="js/artist.js"></script>
</body>
</html>