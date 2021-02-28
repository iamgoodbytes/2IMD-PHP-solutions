<?php ?>

<section class="header"><!--
 <div class="window__actions"><i class="ion-record red"></i><i class="ion-record yellow"></i><i class="ion-record green"></i></div>
-->
<div class="page-flows"><span class="flow">
 <a href="index.php"><i class="ion-chevron-left"></i></a></span>
 <span class="flow">
   <i class="ion-chevron-right disabled"></i></span>
 </div>
 <div class="search">
   <input type="text" placeholder="Search" /></div>
   <div class="user">
     <div class="user__info"><span class="user__info__img"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/adam_proPic.jpg" alt="Profile Picture" class="img-responsive" /></span>
       <span class="user__info__name"><span class="first"><?php echo $_SESSION["username"]; ?></span>
     </div>
     <div class="user__actions"><div class="dropdown">
       <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="ion-chevron-down"></i></button>
       <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1"><li><a href="logout.php">Log Out</a></li></ul>
     </div>
   </div>
 </div>
</section>
