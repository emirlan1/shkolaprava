<!DOCTYPE html>
<html>

<head>
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
    <div class="url" data-url="<?php echo base_url()?>"></div>
	<script>
        var url = $('.url').attr('data-url');
		$(function() {
			$("#footer").load(url+"script/footer.html");
		});

	</script>
</head>

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
      <li><a href="<?php echo base_url()?>" class="active1" style="font-weight: 600;">Главная</a></li>
      <li><a href="<?php echo base_url()?>about" style="font-weight: 600;">О нас</a></li>
      <li><a href="<?php echo base_url()?>forum" style="font-weight: 600;">Форум</a></li>
      <li><a href="<?php echo base_url()?>advice" style="font-weight: 600;">Консультации</a></li>
      <li><a href="<?php echo base_url()?>analytics" style="font-weight: 600;">Аналитика</a></li>
      <li><a href="<?php echo base_url()?>projects" style="font-weight: 600;">Наша деятельность</a></li>
    </ul>
  </div>
  </nav>
	<!-- Page Container -->
	<div id="demo1" class="w3-content" style="max-width:1400px;">
		    <div class="container" style="margin-top: 150px">
			<h1 class="text-center font-weight-bold"><?php echo $news[0]['name']?></h1>
			<div class="hr-divider"></div>
			<img src="<?php echo base_url()?>uploads/<?php echo $news[0]['img']?>" alt="" class="img-fluid">
			<h6><?php echo $news[0]['text']?></h6>
			<div class="hr-divider"></div>
			<div class="container mt-5 mb-5">
	
			</div>
		</div>
		<!-- End Page Container -->
	</div>
	<div id="footer"></div>


</body>

</html>