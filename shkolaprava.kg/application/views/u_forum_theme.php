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
      <a href="index.html"><img width="70px" height="70px" src="<?php echo base_url()?>images/image_1.jpg"></a>
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
  
	<div id="demo1" class="w3-content" style="max-width:1400px;">
		<div class="panel relative">
			<div class="forum-head" style="background-image: url(<?php echo base_url()?>images/bg-forum.jpg);">
				<div class="centered-text">
					<h1 class="text-center text-uppercase display-3 font-weight-bold" style="background: #ff0000bf;">Форум</h1>
<!--
					<ol class="breadcrumb purple lighten-4 justify-content-center">
                        <li class="breadcrumb-item"><a class="black-text px-3" href="#" style="background-color: #ff0000bf">Home</a><i class="fa fa-angle-right mx-2" aria-hidden="true"></i></li>
                        <li class="breadcrumb-item"><a class="black-text px-3" href="#" style="background-color: #ff0000bf">Forum</a><i class="fa fa-angle-right mx-2" aria-hidden="true"></i></li>
                        <li class="breadcrumb-item px-3" style="background-color: #ff0000bf">Theme</li>
					</ol>
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
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" placeholder="Поиск...">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="nav flex-column nav-pills mt-3 pill-border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php foreach($cats as $row){ ?>
						<a href="<?php echo base_url()?>category/<?php echo $row['id']?>"><a href="<?php echo base_url()?>category/<?php echo $row['id']?>" class="nav-item nav-link" id="v-pills-home-tab" role="tab"><?php echo $row['category_name']?></a></a>
                        <?php }?>
                        </div>
                    </div>
				<div class="col-lg-9 col-xs-12 col-md-6">
                <div class="container pill-border">
                    <div class="row">
                        <div class="col-1">
                            <div><i class="fa fa-chevron-up"></i></div>
                            <div class="ml-1">5</div>
                            <div><i class="fa fa-chevron-down"></i></div>
                        </div>
                        <div class="col-11">
                            <h3 style="font-family: 'Didact Gothic', sans-serif;"><?php echo $theme[0]['theme_name']?></h3>
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="send">
                        <div class="col-1"></div>
                        <div class="col-11">
                            <p><?php echo $theme[0]['theme_desc']?></p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 5px;">
                    <div class="container mb-2">
                         <div class="row d-flex justify-content-end">
                            <div class="col-2"><h6 class="text-right">Поделиться:</h6></div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-fb"><i class="fa fa-facebook"></i></button>
                                <button type="button" class="btn btn-ins"><i class="fa fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="container pill-border mt-2" >
                    <form  <?php if(isset($_SESSION['user'])){echo "onSubmit='forumComment(this)'";}?> action="javascript:void(0)">
                        <div class="form-group mt-1">
                            <label for="textarea"></label><?php if(isset($_SESSION['user'])){echo "Комментировать как ".$_SESSION['name'];}else{echo "Войдите что бы комментировать";}?><br>
                     <div class="answer_hide" style="display: none;"> 
                         <hr>
                     <div class="d-flex flex-row" >
                        <div><h6>Задайте свой вопрос:</h6></div>
                        <div class="ml-3"><h6 class="font-weight-bold font-italic answer_name"></h6></div>
                        <div class="ml-3 my-2" ><a class="float-right btn-xs btn text-white btn-danger" onclick="cancelReply(this)"><i class="fa fa-remove mr-1"></i>Отменить ответ</a></div>
                     </div>
                     </div>
                            <p style="color: red;" class="comment_error"></p>
                            <textarea class="form-control" id="textarea" rows="4" name="text"></textarea>
                            <input type="hidden" name="id" value="<?php echo $id?>">
                            <input type="hidden" class="com_id" name="com_id" value="0">
                            <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                        </div>
                        <div class="panel">
                            <div class="row d-flex justify-content-end">
                                <?php if(isset($_SESSION['user'])){ ?> 
                                <div class="col-auto justify-content-start">
                                <input type="submit" class="btn btn-primary active">
                                </div>
                               <?php } 
                                    else{
                                ?>
                                <div class="col-5"><h6 class="text-right">Войдите и оставьте комментарии:</h6></div>
                                <div class="col-auto justify-content-start">
                                <a href=""><img src="<?echo base_url()?>images/facebook-login-button.png" width="150" alt=""></a>
                                <a href="<?php echo $g_link?>"><img src="<?echo base_url()?>images/google.jpg" width="150" alt=""></a></div>
                                <?php }?>
                            </div>
                            <hr>
                        </div>	
                        </form>
                    </div>
                    <div class="container pill-border mt-3 mb-3">
                        <div class="container">
                            <div class="card mb-4 new_comments">
                                <div class="div_comments_load_more">
                                <?php foreach($comments as $row){ ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo $row['user_img']?>" class="img img-rounded img-fluid" />
                                            <p class="text-secondary text-center"><?php echo date("m.d.y",$row['comment_date'])?></p>
                                        </div>
                                        <div class="col-md-10">
                                            <span><h4><?php echo $row['user_name']?></h4></span>
                                            <div class="clearfix"></div>
                                            <p class="mt-4"><?php echo $row['comment_text']?></p>
                                            <p>
                                                <a class="float-right btn btn-outline-primary ml-2" href="#send" onClick="commentReply(this)" data-name="<?php echo $row['user_name']?>" data-id="<?php echo $row['id']?>"> <i class="fa fa-reply" href="#send" ></i> Ответить</a>
                                            </p>
                                        </div>
                                    </div>
                                    <?php 
                                        $comments_type = $row['comments_type'];
                                        foreach($comments_type as $zow){       ?>                   
                                      <div class="card card-inner">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="<?php echo $zow['user_img']?>" class="img img-rounded img-fluid" />
                                                    <p class="text-secondary text-center"><?php echo date("m.d.y",$zow['comment_date'])?></p>
                                                </div>
                                                <div class="col-md-10">
                                                    <span><a class="float-left" href="#"><?php echo $zow['user_name']?></a></span>
                                                    <span><i class="fa fa-angle-right ml-2 fa-lg"></i></span>
                                                    <span><strong><?php echo $row['user_name']?></strong></span>
                                                    <p class="mt-4"><?php echo $zow['comment_text']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                                <?php }?>
                                </div>
                        <div class="container text-center">
                             <a class="btn btn-outline-primary ml-2" role="button" data-limit="0" data-theme="<?php echo $id?>" onclick="commentsLoadMore(this)"><i class="fa fa-download"></i> Загрузить ещё</a>
                        </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer"></div>
</body>

</html>