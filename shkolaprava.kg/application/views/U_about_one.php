<!DOCTYPE html>
<html>
<title>Uristkg</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>script/main.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/luxbar.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/media.css">



<body>
	<header id="luxbar" class="luxbar-fixed">
    <input type="checkbox" class="luxbar-checkbox" id="luxbar-checkbox"/>
    <div class="luxbar-menu luxbar-menu-right luxbar-menu-dark">
        <ul class="luxbar-navigation topnav">
            <li class="luxbar-header logo">
                <a href="index.html" class="luxbar-brand">URISTKG</a>
                <label class="luxbar-hamburger luxbar-hamburger-doublespin" 
                id="luxbar-hamburger" for="luxbar-checkbox"> <span></span> </label>
            </li>
      <li class="nav-item"><a href="<?php echo base_url()?>" class="nav-link" >Главная</a></li>
      <li class="nav-item"><a href="<?php echo base_url()?>about" class="nav-link" >О нас</a></li>
      <li class="nav-item"><a href="<?php echo base_url()?>forum" class="nav-link" >Форум</a></li>
      <li class="nav-item"><a href="<?php echo base_url()?>advice" class="nav-link" >Консультации</a></li>
      <li class="nav-item"><a href="<?php echo base_url()?>analytics" class="nav-link" >Аналитика</a></li>
      <li class="nav-item"><a href="<?php echo base_url()?>projects" class="nav-link" >Наша деятельность</a></li>
        </ul>
    </div>
</header>
  <nav id="desktop_navbar">
    <div class="logo">
      <a href="index.html"><img width="70px" height="70px" src="images/image_1.jpg"></a>
    </div>
    <div id="myNavbar">
    <ul>
      <li><a href="<?php echo base_url()?>"  style="font-weight: 600;">Главная</a></li>
      <li><a href="<?php echo base_url()?>about" class="active1" style="font-weight: 600;">О нас</a></li>
      <li><a href="<?php echo base_url()?>forum" style="font-weight: 600;">Форум</a></li>
      <li><a href="<?php echo base_url()?>advice" style="font-weight: 600;">Консультации</a></li>
      <li><a href="<?php echo base_url()?>analytics" style="font-weight: 600;">Аналитика</a></li>
      <li><a href="<?php echo base_url()?>projects" style="font-weight: 600;">Наша деятельность</a></li>
    </ul>
  </div>
  </nav>
<!-- Page Container -->
<div id="demo1" class="w3-content" style="max-width:1400px;">

 
  <div class="w3-row-padding w3-light-grey px-5 mt-3">  
    <h1 id="demo" style="font-weight: 600;">Руководство</h1>
    <hr>
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="<?php echo base_url()?>uploads/<?php echo $about[0]['img']?>" style="width:100%;" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $about[0]['name']?></h2>
          </div>
        </div>
        <div class="w3-container my-3">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-black"></i><?php echo $about[0]['work']?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-black"></i><?php echo $about[0]['mail']?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-black"></i><?php echo $about[0]['phone']?></p>
          <hr>

        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-black"></i>Work Experience</h2>
          <?php foreach($xp as $row){ ?>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $row['work_place']?></b></h5>
          <h6 class="w3-text-black"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row['work_date']?></span></h6>
          <p><?php echo $row['work_desc']?></p>
          <hr>
        </div>
          <?php }?>
  
      </div>

  </div>
</div>  <!-- End Page Container -->
</div>
 <div class="w3-dark-grey">
<div class="w3-container w3-content w3-padding-64 container-fluid px-5" style="max-width: 800px;" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Bishkek, KG<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>


<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="http://www.it-academy.kg" target="_blank">IT Academy</a></p>
</footer>
</div>  

</body>
</html>
