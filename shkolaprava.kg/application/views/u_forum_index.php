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
    <script src="<?php echo base_url()?>script/forum.js"></script>
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
      <li><a href="<?php echo base_url()?>"  style="font-weight: 600;">Главная</a></li>
      <li><a href="<?php echo base_url()?>about"  style="font-weight: 600;">О нас</a></li>
      <li><a href="<?php echo base_url()?>forum" class="active1" style="font-weight: 600;">Форум</a></li>
      <li><a href="<?php echo base_url()?>advice" style="font-weight: 600;">Консультации</a></li>
      <li><a href="<?php echo base_url()?>analytics" style="font-weight: 600;">Аналитика</a></li>
      <li><a href="<?php echo base_url()?>projects" style="font-weight: 600;">Наша деятельность</a></li>
    </ul>
  </div>
  </nav>
	<!-- Page Container -->
	<div id="demo1" class="w3-content" style="max-width:1400px; ">
		<div class="panel relative">
			<div class="forum-head" style="background-image: url(<?php echo base_url()?>images/bg-forum.jpg);">
				<div class="centered-text">
					<h1 class="text-center text-uppercase display-3 font-weight-bold" style="background: #ff0000bf;">Форум</h1>
<!--
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a href="#" class="nav-link text-lowercase active ml-3 mt-2" style="background-color: #ff0000bf">Лучшие</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-lowercase ml-3 mt-2" style="background-color: #ff0000bf">Популярные</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-lowercase ml-3 mt-2 mr-3" style="background-color: #ff0000bf">Новые</a>
						</li>
					</ul>
-->
				</div>
			</div>
		</div>
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-3 col-xs-12 col-md-6 mb-3">
					<div class="panel mb-3 relative">
						<div class="inline">
							<img src="<?php echo base_url()?>images/rules.jpg" class="img-fluid" alt="">
							<div class="centered-text" style="background: #ff0000bf;padding: 5px">
								Правила
							</div>
							<div class="cover overlay"></div>
						</div>
					</div>
                    <form onSubmit="searchThemes(this)" action="javascript:void(0)">
					<div class="input-group">
                        <input name="search" type="text" class="form-control" id="search" placeholder="Поиск...">
                        <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    </form>
					<div class="nav flex-column nav-pills mt-3 pill-border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                         <?php foreach($cats as $row){ ?>
						<a href="<?php echo base_url()?>category/<?php echo $row['id']?>"><a href="<?php echo base_url()?>category/<?php echo $row['id']?>" class="nav-item nav-link" id="v-pills-home-tab" role="tab"><?php echo $row['category_name']?></a></a>
                        <?php }?>
					</div>
				</div>
				<div class="col-lg-9 col-xs-12 col-md-6 searh_table">
					<div class="container-fluid pill-border pl-3 mb-2 pb-2 bg-panel">
						<i class="fa fa-newspaper-o mt-2" style="font-size:2.3vw;color:red"></i>
						<div class="title"><?php echo $cats[0]['category_name']?></div>
					</div>
					<table class="table table-hover pill-border">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Название категории</th>
								<th scope="col" class="d-sm-none d-md-block d-none d-xs-block">Посл.сообщение</th>
								<th scope="col">Коммент</th>
								<th scope="col">Просмотры</th>
							</tr>
						</thead>
						<tbody>
                            <?php $themes = $cats[0]['themes'];
                                foreach($themes as $row){ ?>
                                <tr>
                                    <th scope="row">
                                        <div><i class="fa fa-chevron-up"></i></div>
                                        <div class="d-flex justify-content-center"><?php echo $row['likes']?></div>
                                        <div><i class="fa fa-chevron-down"></i></div>
                                    </th>
                                    <td>
                                        <a href="<?php echo base_url()?>theme/<?php echo $row['id']?>"><p class="mt-2"><?php echo $row['theme_name']?></p></a>
                                    </td>
                                    <td class="d-sm-none d-md-block d-none d-xs-block">
                                        <p class="mt-2 d-flex justify-content-center"><?php echo $row['theme_date']?></p>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-2"><?php echo $row['comments']?></div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-2">
                                            <div><i class="fa fa-eye"></i></div>
                                            <div class="ml-2"><?php echo $row['views']?></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
						</tbody>
					</table>
				</div>
			</div>
            <?php foreach($cats as $row){ ?>
            <div class="row empty_searh">
				<div class="col-lg-3 col-xs-12 col-md-6 mb-3">
				</div>
				<div class="col-lg-9 col-xs-12 col-md-6">
					<div class="container-fluid pill-border pl-3 mb-2 pb-2 bg-panel">
						<i class="fa fa-newspaper-o mt-2" style="font-size:2.3vw;color:red"></i>
						<div class="title"><?php echo $row['category_name']?></div>
					</div>
					<table class="table table-hover pill-border">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Название категории</th>
								<th scope="col" class="d-sm-none d-md-block d-none d-xs-block">Посл.сообщение</th>
								<th scope="col">Коммент</th>
								<th scope="col">Просмотры</th>
							</tr>
						</thead>
						<tbody>
                            <?php $themes = $row['themes'];
                                foreach($themes as $row){ ?>
                                <tr>
                                    <th scope="row">
                                        <div><i class="fa fa-chevron-up"></i></div>
                                        <div class="d-flex justify-content-center"><?php echo $row['likes']?></div>
                                        <div><i class="fa fa-chevron-down"></i></div>
                                    </th>
                                    <td>
                                        <p class="mt-2"><?php echo $row['theme_name']?></p>
                                    </td>
                                    <td class="d-sm-none d-md-block d-none d-xs-block">
                                        <p class="mt-2 d-flex justify-content-center"><?php echo $row['theme_date']?></p>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-2"><?php echo $row['comments']?></div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center mt-2">
                                            <div><i class="fa fa-eye"></i></div>
                                            <div class="ml-2"><?php echo $row['views']?></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
						</tbody>
					</table>
				</div>
			</div>
            <?php }?>
		</div>
        
		<!-- End Page Container -->
	</div>
	<div id="footer"></div>
</body>

</html>