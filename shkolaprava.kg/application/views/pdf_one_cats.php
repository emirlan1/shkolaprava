<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Avenger Admin Theme</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenger Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>script/pdf.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
    </head>
<div class="url" data-url="<?php echo base_url()?>"></div>
    <body class="infobar-offcanvas">
    <header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner">
	<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
		<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
	</span>
	<a class="navbar-brand" href="index.html">SHKOLAPRAVA</a>
	<ul class="nav navbar-nav toolbar pull-right">
        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="fa fa-fw fa-arrows-alt"></i></span></i></a>
        </li>
	</ul>
</header>
        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-midnightblue">
                    <div class="static-sidebar">
                        <div class="sidebar">

	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator">Explore</li>
		<li><a href="<?php echo base_url()?>start"><i class="fa fa-home"></i><span>Главная</span></a></li>
		<li><a href="<?php echo base_url()?>news"><i class="fa fa-home"></i><span>Новости</span></a></li>
        <li><a href="<?php echo base_url()?>categories"><i class="fa fa-home"></i><span>Форум</span></a></li>
        <li><a href="<?php echo base_url()?>consult"><i class="fa fa-home"></i><span>Консультации</span></a></li>
        <li><a href="<?php echo base_url()?>lawyers"><i class="fa fa-home"></i><span>О нас</span></a></li>
        <li><a href="<?php echo base_url()?>pdf_category_files"><i class="fa fa-home"></i><span>Аналитика</span></a></li>
        <li><a href="<?php echo base_url()?>reports"><i class="fa fa-home"></i><span>Деятельность</span></a></li>
        <li><a href="<?php echo base_url()?>app"><i class="fa fa-home"></i><span>Заявки</span></a></li>
	</ul>
</nav>
    </div>
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
                            <li class=""><a href="index.html">Главная</a></li>

                            </ol>
                            <div class="page-heading">            
                                <h1>Добро пожаловать в Админ панель сайта Shkolaprava.kg</h1><br>
              
                            </div>
                           
                            <div class="container-fluid">
                                
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable ">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#insertTheme">Добавить файл</button><br>
        </div>

        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Новости</h2>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="padding-right:100px">Название</th>
                            <th colspan="2">Редактировать</th>
                        </tr>
                    </thead>
                    <tbody>
                  <?php
                $i = 1;
                foreach ($categories as $category) { ?>
                  <tr>
                      <td><?php echo $category['name'] ?></td>
      
                      <td><button  data-id="<?php echo $category['id'] ?>" type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCategory" onclick="deletePress(this)">Удалить файл</button></td>
                       <td><a href="<?php echo base_url()?>pdf_files/<?php echo $category['route']?>"><button type="button" class="btn btn-success" >Скачать</button></a></td>
                  </tr>
                <?php $i++;}?>
          

                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>
</div>



                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
  
                </div>
            </div>
        </div>

<div class="modal fade" id="insertLawyer" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление юриста</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onsubmit="insertLawyer(this)" enctype="multipart/form-data">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>ФИО:</label>
                    <input required type="text" class="form-control" name="name">
                    <label>Фото:</label>
                    <input required type="file" name="img">
                    <label>Место работы:</label>
                    <input required type="text" class="form-control" name="work">
                    <label>Mail:</label>
                    <input required type="text" class="form-control" name="mail">
                    <label>Телефон:</label>
                    <input required type="text" class="form-control" name="phone">
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="insertTheme" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление темы</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onSubmit="insertThemeFile(this)">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>Название файла:</label>
                    <input required type="text" class="form-control" name="category_name">
                    <label>Файл:</label>
                    <input required type="file" class="form-control" name="userfile">
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удаление категории</h4>
            </div>
            <div class="modal-body">
                <form onsubmit="deleteCategory(this)" method="post" action="javascript:void(0)">
                    <h4 id="delete_question">*ОБРАТИТЕ ВНИМАНИЕ<br>УДАЛЕНИЕ ЭТОЙ СТРОЧКИ УДАЛИТ ФАЙЛ<br> ОТМЕНИТЬ ЭТО ДЕЙСТВИЕ <span style="color:red;">НЕВОЗМОЖНО</span><br>СОВЕТУЕМ СКАЧАТЬ ФАЙЛ ПЕРЕД УДАЛЕНИЕМ<br> ЭТО ДЕЙСТВИЕ <span style="color:red;">НЕОБРАТИМО</span> </h4>
                    <div class="form-group">
                        <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>"><br>
                        <input type="hidden" id="delete_id" name="id">
                        <button class="btn btn-danger center-block" type="submit">Удалить</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    </body>
</html>

<!--
<a href="<?php echo base_url()?>admins/logout"><button type="button" class="btn btn-danger">Выход</button></a>
<div class="container">
-->
<!--
      <div class="list-group">
        <a href="<?php echo base_url()?>categories" class="list-group-item list-group-item-info">Форум</a>
        <a href="" class="list-group-item list-group-item-info">Новости</a>
        <a href="<?php echo base_url()?>lawyers" class="list-group-item list-group-item-info">О нас</a>
        <a href="<?php echo base_url()?>pdf_category_files" class="list-group-item list-group-item-info">Аналитика</a>
        <a href="<?php echo base_url()?>reports" class="list-group-item list-group-item-info">Департамент</a>
        <a href="<?php echo base_url()?>app" class="list-group-item list-group-item-info">Заявки</a>
      </div>
-->