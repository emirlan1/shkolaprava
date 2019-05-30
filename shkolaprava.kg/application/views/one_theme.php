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
    <link type="text/css" href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>css/style.css">
    </head>

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
                            <h3>Категории</h3>
             <table class="table" id="table_categories" >
                <tbody>
                <?php
                foreach ($categories as $category) {
                $category_id = $category->id;
                $category_name = $category->category_name;
                ?>

                <tr class="info" id='ul_<?php echo $category_id?>'>
                      <td>
                          <a id="a_<?php echo $category_id?>" href="<?php echo base_url()?>themes/<?php echo $category->id?>"><?php echo $category->category_name?></a>
                              <button onclick='deletePress(this)' type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteCategory' data-id='<?php echo $category_id?>' data-name='<?php echo $category_name?>'><span class='glyphicon glyphicon-trash'></span></button>
                              <button onclick='updatePress(this)' type='button' class='btn btn-warning' data-toggle='modal' data-target='#updateCategory' data-id='<?php echo $category_id?>' data-name='<?php echo $category_name?>'><span class='glyphicon glyphicon-edit' ></span ></button >
                      </td>
                </tr>


                <?php }

                ?>

                </tbody>
            </table>
<div class="container-fluid">
                                
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable ">
              
        </div>

        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2><?php echo $one_theme[0]->theme_name?></h2>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                <table class="table" id="table_themes">
                        <?php echo $one_theme[0]->theme_desc?>
                </table>
            </div>
              
          </div>
        </div>
           <h3>Comments</h3>

    <?php
        foreach ($comments as $comment):
    ?>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <h4>
            Имя: <span class="name"><?php echo $comment['user_name']?>, </span><br>
        Почта: <span class="mail"><?php echo $comment['user_email']?>, </span><br>
            Дата: <span class="time"><?php echo date("m.d.y",$comment['comment_date']); ?></span><br>
              <img src="<?php echo $comment['user_img']?>" style="width:150px;" class="img img-rounded img-fluid" />
          </h4>
        </h4>
           <div class="comment-text"><?php echo $comment['comment_text']?></div>
          
      </div>
      <div>
        <ul class="list-group">
            <?php 
                $comments_type = $comment['comments_type'];
                foreach($comments_type as $zow){       
            ?>     
          <li class="list-group-item">
        <h4 class="panel-title">
          <h5>
            Имя: <span class="name"><?php echo $zow['user_name']?>, </span><br>
              Почта: <span class="mail"><?php echo $zow['user_email']?>, </span><br>
            Дата: <span class="time"><?php echo date("m.d.y",$zow['comment_date']); ?></span><br>
              <img src="<?php echo $zow['user_img']?>" style="width:100px;" class="img img-rounded img-fluid" />
          </h5>
        </h4>
             <div class="comment-text"><?php echo $zow['comment_text']?></div>
            </li>
                   <?php }?>                                    
                               
                                
        </ul>
      </div>
    </div>
  </div>


    <?php endforeach;?>

        
    </div>
</div>



                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
  
                </div>
            </div>
        </div>

<div class="modal fade" id="insertCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление категории</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onsubmit="insertCategory(this)">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>Название категории:</label>
                    <input required type="text" class="form-control" name="category_name">
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
                <form method="post" action="javascript:void(0)" onsubmit="insertTheme(this)">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>Название темы:</label>
                    <input required type="text" class="form-control" name="theme_name">
                    <label>Описание темы:</label>
                    <textarea required cols="5" class="form-control" name="theme_desc"></textarea>
                    <label>Категория:</label>
                    <select required name="category_id">
                        <option value="">Выберите категорию</option>
                        <?php
                        foreach ($categories as $category) {
                            echo "<option value='$category->id'>$category->category_name</option>";
                        }
                        ?>
                    </select>
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>

    function makeMain(context) {
        var id = context.getAttribute('data-id');
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "themes/make_main",
            data: {id: id, csrf_test_name: $(".csrf").val()},
            dataType: "JSON"
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            alert(message.success);
        })
    }

</script>

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