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
                                
<li class=""><a href="<?php echo base_url()?>lawyers">Ко всем юристам</a></li>

                            </ol>
                            <div class="page-heading">            
                                <h1>Добро пожаловать в Админ панель сайта Shkolaprava.kg</h1><br>
              
                            </div>
                           
                            <div class="container-fluid">
        <div class="col-lg-3 col-md-3">
            <?php
            foreach ($one_lawyer as $info_lawyer) {
                echo "<h3 class='centered'>Имя: " . $info_lawyer->name . "</h3>";
                echo "<h5>Работа: " . $info_lawyer->work . "</h5>";
                echo "<h5>Почта: " . $info_lawyer->mail . "</h5>";
                echo "<h5>Телефон " . $info_lawyer->phone . "</h5>";
                echo "<img src='" . base_url() . "uploads/" . $info_lawyer->img . "' width='100'>";
                echo "<a href='" . base_url() . "update_lawyer/$lawyer_id'><button type='button' class='btn btn-warning'>
                    Update
                </button></a>";
            }
            ?>
        </div>
<div class="row">
    <div class="col-sm-12">

        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Новости</h2>
          </div>
            
          <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
               <div class="col-lg-9 col-md-9">
            <h3 class="centered">Опыт работы</h3>
            <button class="btn btn-info" data-toggle="modal" data-target="#insertExperience">Добавить опыт работы</button>
            <div id="experiences">
            <?php
            foreach ($experiences as $experience) {
                $experience_id = $experience->id;
                echo "<div id='tr_$experience_id' class='one-experience'>
                    <div>
                        $experience->work_place
                    </div>
                    <div>
                        $experience->work_date
                    </div>
                    <div>
                        $experience->work_desc
                    </div>
                    <div>
                        <button class='btn btn-danger' onclick='deletePress(this)' data-id='$experience_id' data-toggle='modal' data-target='#deleteExperience'><span class='glyphicon glyphicon-trash'></span></button>
                    </div>
                </div>";
            }
            ?>
            </div>
        </div>
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

<div class="modal fade" id="insertExperience" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление опыта работы</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onsubmit="insertExperience(this)" enctype="multipart/form-data">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>Место работы:</label>
                    <input required type="text" class="form-control" name="work_place">
                    <label>Дата работы:</label>
                    <input required type="text" class="form-control" name="work_date">
                    <label>Описание работы:</label>
                    <input required type="text" class="form-control" name="work_desc">
                    <input type="hidden" name="lawyer_id" value="<?php echo $lawyer_id?>">
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteExperience" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удаление опыта работы</h4>
            </div>
            <div class="modal-body">
                <form onsubmit="deleteExperience(this)" method="post" action="javascript:void(0)">
                    <h3 id="delete_question"></h3>
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
<script>

    function insertExperience(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "experiences/insert_experience",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            $(".form-control").val('');
            $("#insertExperience").trigger('click');
            $("#experiences").append("<div id='tr_" + message.id + "' class='one-experience'>" +
                "<div>" + message.work_place + "</div>" +
                "<div>" + message.work_date + "</div>" +
                "<div>" + message.work_desc + "</div>" +
                "<div>" +
                "<button class='btn btn-danger' onclick='deletePress(this)' data-id='" + message.id + "' data-toggle='modal' data-target='#deleteExperience'><span class='glyphicon glyphicon-trash'></span></button> " +
                "</div> " +
                "</div>");
        })
    }

    function deletePress(context) {
        var id = context.getAttribute('data-id');
        var delete_id = document.getElementById('delete_id');
        var delete_question = document.getElementById('delete_question');
        delete_id.value = id;
        delete_question.innerHTML = "Вы действительно хотите удалить этот опыт?";
    }

    function deleteExperience(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "experiences/delete_experience",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function(message) {
            $(".csrf").val(message.csrf_hash);
            $("#deleteExperience").trigger('click');
            $("#tr_" + message.id).remove();
        });
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