<!DOCTYPE html>
<html>

<head>
	<title>Uristkg</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<style type="text/css">
		nav ul li a {
			color: #fff;
			d
		}

		#myCarousel .carousel-indicators>li {
			width: initial;
			height: initial;
			text-indent: initial;
			background-color: #aaaaaa7d;
		}

		#myCarousel .carousel-indicators>li.active img {
			opacity: 0.7;
		}

	</style>
    <div class="url" data-url="<?php echo base_url()?>"></div>
	<script>
        var url = $('.url').attr('data-url');
		$(function() {
			$("#header").load(url+"script/header.html");
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
	<div>
		<div class="panel">
			<div id="myCarousel" class="carousel slide">
				<!-- main slider carousel items -->
				<div class="carousel-inner">
					<div class="active item carousel-item" data-slide-number="0">
						<img src="<?php echo base_url()?>uploads/<?php echo $news[0]['img']?>" class="img-fluid">
					</div>
					<div class="item carousel-item" data-slide-number="1">
						<img src="<?php echo base_url()?>uploads/<?php echo $news[1]['img']?>" class="img-fluid">
					</div>
					<div class="item carousel-item" data-slide-number="2">
						<img src="<?php echo base_url()?>uploads/<?php echo $news[2]['img']?>" class="img-fluid">
					</div>

					<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
					<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>

				</div>
				<!-- main slider carousel nav controls -->


				<ul class="carousel-indicators list-inline d-none d-sm-none d-md-block">
                    <?php foreach($news as $row){ ?>
                        <li class="list-inline-item active">
                            <a href="<?php echo base_url()?>item/<?php echo $row['id']?>"><h6 class="text-truncate text-center" style="font-weight: 600; color: white;"><?php echo $row['name']?></h6></a>
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="<?php echo base_url()?>uploads/<?php echo $row['img']?>" width="275" height="200" class="img-fluid">
                            </a>
                        </li>
                    <?php }?>
				</ul>
			</div>
		</div>
	</div>
	<!--<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div style="max-height: 600px;" class="carousel-inner">
    <div class="carousel-item active">
    <img src="http://www.ppp-news.com/wp-content/uploads/2017/05/law-wallpapers-hd-1080p-1920x1080-desktop-02.jpg" alt="">
      <div id="wrapper">
        <div id="images">
          <div class="ml-4">
            <a href="" style="text-decoration: none;"><h6 class="text-truncate" style="font-weight: 600; color: #fff;">В Нарыне подписали запрет на ...</h6></a>
            <img src="http://anysite.ru/img/publication/sign/sign3.jpg" alt="car1" width="275" height="200"/>
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 class="text-truncate" style="font-weight: 600; color: #fff;">В Таласе установили запрет на ...</h6></a>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvtDXdSs2MjWvxmEXXhxpkFGdrqdVguJ1obSIEIDJTIUCVwbhHkw" width="275" alt="car2" height="200" />
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 class="text-truncate" style="font-weight: 600; color: #fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, dolorem? Ex totam impedit distinctio? Ipsum ea sit magni, earum labore perspiciatis quasi, cum illum, fuga veniam nam totam quo, aperiam voluptatem maiores suscipit accusantium ad ratione eum perferendis atque assumenda doloremque laborum. Molestiae error tenetur quas aspernatur porro, iure quia. Ad, beatae? Cum quo ullam eius, nihil, modi expedita!</h6></a>
            <img src="https://cst.org.uk/data/image/8/e/8e3e848cbd24bdb85a7c97869ec77386.1451995352.jpg" width="275" alt="car3" height="200" />
          </div>
        </div>
    </div>
      <div class="carousel-caption top-left">
        <h1 id="news" style="font-weight: 600;">Последние новости...</h1>
      </div> 
    </div>
    <div class="carousel-item">
       <img src="http://www.ppp-news.com/wp-content/uploads/2017/05/law-wallpapers-hd-1080p-1920x1080-desktop-02.jpg" alt="">
          <div id="wrapper">
        <div id="images">
          <div class="ml-4">
            <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Нарыне подписали запрет на ...</h6></a>
            <img src="http://anysite.ru/img/publication/sign/sign3.jpg" alt="car1" width="275" height="200"/>
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Таласе установили запрет на ...</h6></a>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvtDXdSs2MjWvxmEXXhxpkFGdrqdVguJ1obSIEIDJTIUCVwbhHkw" width="275" alt="car2" height="200" />
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Нарыне подписали запрет на ...</h6></a>
            <img src="https://cst.org.uk/data/image/8/e/8e3e848cbd24bdb85a7c97869ec77386.1451995352.jpg" width="275" alt="car3" height="200" />
          </div>
        </div>
    </div>
      <div class="carousel-caption top-left">
        <h1 id="news" style="font-weight: 600;">Последние новости...</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="http://www.ppp-news.com/wp-content/uploads/2017/05/law-wallpapers-hd-1080p-1920x1080-desktop-02.jpg" alt="">
            <div id="wrapper">
        <div id="images">
          <div class="ml-4">
            <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Нарыне подписали запрет на ...</h6></a>
            <img src="http://anysite.ru/img/publication/sign/sign3.jpg" alt="car1" width="275" height="200"/>
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Таласе установили запрет на ...</h6></a>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvtDXdSs2MjWvxmEXXhxpkFGdrqdVguJ1obSIEIDJTIUCVwbhHkw" width="275" alt="car2" height="200" />
          </div>
          <div class="ml-4">
             <a href="" style="text-decoration: none;"><h6 style="font-weight: 600; color: #fff;">В Нарыне подписали запрет на ...</h6></a>
            <img src="https://cst.org.uk/data/image/8/e/8e3e848cbd24bdb85a7c97869ec77386.1451995352.jpg" width="275" alt="car3" height="200" />
          </div>
        </div>
    </div>
      <div class="carousel-caption top-left">
        <h1 id="news" style="font-weight: 600;">Последние новости...</h1>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>-->
	<hr class="mt-5">
	<div class="px-5">
		<div class="row">
			<div class="leftcolumn">
                <?php foreach($another_news as $row){ ?>
				<div class="card">
                    <a href="<?php echo base_url()?>item/<?php echo $row['id']?>"><h2 style="font-weight: 600;"><?php echo $row['name']?></h2></a>
					<h5 style="font-weight: 600;"><?php echo $row['time']?></h5>
					<div class="fakeimg" ><img src="<?php echo base_url()?>uploads/<?php echo $row['img']?>"></div>
					<p><?php echo $row['mini_dis']?></p>
				</div>
                <?php }?>
			</div>
			<div class="rightcolumn">
				<div class="card">
					<h2 style="font-weight: 600;">About Me</h2>
					<div class="fakeimg" style="height:100px;">Image</div>
					<p>Some text about me in culpa qui officia deserunt mollit anim..</p>
				</div>
				<div class="card" style="height: 600px">
					<h2 style="font-weight: 600;">About Me</h2>
					<div class="fakeimg" style="height:450px;">Image</div>
					<p>Some text about me in culpa qui officia deserunt mollit anim..</p>
				</div>
			</div>
		</div>
	</div>
	<div id="footer"></div>
	
</body>

</html>
