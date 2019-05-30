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
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#insertReport">Добавить репортаж</button>
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
                            <th>Описание</th>
                            <th>Дата</th>
                            <th>Фото</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                    foreach ($reports as $report) {
                        $report_id = $report->id;
                        echo "<tr id='tr_$report_id'>
                                <td>
                                    <a id='a_$report_id' href='" . base_url() . "one_report/$report_id'>" . $report->name . "</a>
                                </td>
                                <td>
                                    <span id='text_$report_id'>$report->text</span>
                                </td>
                                <td>
                                    <span id='date_$report_id'>".date('d.m.Y',$report->date)."</span>
                                </td>
                                <td>
                                    <img id='img_$report_id' src='" . base_url() . "uploads/" . $report->img . "' width='100'>
                                </td>
                                <td>
                                    <button onclick='deletePress(this)' type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteReport' data-id='" . $report_id ."' data-name='" . $report->name ."'><span class='glyphicon glyphicon-trash'></span></button>
                                    <button onclick='updatePress(this)' type='button' class='btn btn-warning' data-toggle='modal' data-target='#updateReport' data-id='" . $report_id ."' data-name='" . $report->name ."' data-text='" . $report->text . "' data-date='" . $report->date . "' data-video='" . $report->video . "'><span class='glyphicon glyphicon-edit'></span></button>
                                </td>
                            </tr>";
                    }
                        ?>
          

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

<div class="modal fade" id="insertReport" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление репортажа</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onsubmit="insertReport(this)" enctype="multipart/form-data">
                    <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                    <label>Заголовок:</label>
                    <input required type="text" class="form-control" name="name">
                    <label>Описание:</label>
                    <textarea required cols="5" class="form-control" name="text"></textarea>
                    <label>Фото:</label>
                    <input type="file" name="img">
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteReport" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удаление репортажа</h4>
            </div>
            <div class="modal-body">
                <form onsubmit="deleteReport(this)" method="post" action="javascript:void(0)">
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
<div class="modal fade" id="updateReport" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Редактирование репортажа</h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" onsubmit="updateReport(this)" enctype="multipart/form-data">
                    <div class="form-group">
                        <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>"><br>
                        <input type="hidden" name="id" id="update_id">
                        <label for="update_name">Заголовок:</label>
                        <input name="name" id="update_name" type="text" class="form-control">
                        <label for="update_text">Описание:</label>
                        <input name="text" id="update_text" type="text" class="form-control">
                        <label for="update_text">Видео: *Оставьте поле пустым, если видео отсутствует</label>
                        <input name="video" id="update_video" type="text" class="form-control">
                        <label for="update_img">Img:</label>
                        <input name="img" id="update_img" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning center-block" type="submit">Редактировать</button>
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

    function insertReport(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "reports/insert_report",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            $(".form-control").val('');
            $("#insertReport").trigger('click');
            $("#table_reports").append("<tr id='tr_" + message.id + "'> " +
                "<td> " +
                    "<a id='a_" + message.id + "' href='<?php echo base_url()?>one_report/" + message.id + "'>" + message.name + "</a> " +
                "</td> " +
                "<td>" +
                "<span id='text_" + message.id + "'>" + message.text + "</span>" +
                "</td>" +
                "<td>" +
                "<span id='date_" + message.id + "'>" + message.date + "</span>" +
                "</td>" + "" +
                "<td>" +
                "<img id='img_" + message.id + "' src='<?php echo base_url()?>uploads/" + message.img + "' width='100'> " +
                "</td>" +
                "<td>" +
                "<button onclick='deletePress(this)' type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteReport' data-id='" + message.id + "' data-name='" + message.name + "'><span class='glyphicon glyphicon-trash'></span></button>" +
                    "<button onclick='updatePress(this)' type='button' class='btn btn-warning' data-toggle='modal' data-target='#updateReport' data-id='" + message.id + "' data-name='" + message.name + "' data-text='" + message.text + "' data-date='" + message.date + "'><span class='glyphicon glyphicon-edit'></span></button>" +
                "</td>" +
            "</tr>");
        })
    }

    function deletePress(context) {
        var id = context.getAttribute('data-id');
        var name = context.getAttribute('data-name');
        var delete_id = document.getElementById('delete_id');
        var delete_question = document.getElementById('delete_question');
        delete_id.value = id;
        delete_question.innerHTML = "Вы действительно хотите удалить репортаж " + name + "?";
    }

    function deleteReport(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "reports/delete_report",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function(message) {
            $(".csrf").val(message.csrf_hash);
            $("#deleteReport").trigger('click');
            $("#tr_" + message.id).remove();
        });
    }

    function updatePress(context) {
        var id = context.getAttribute('data-id');
        var name = context.getAttribute('data-name');
        var text = context.getAttribute('data-text');
        var video = context.getAttribute('data-video');
        var update_id = document.getElementById('update_id');
        var update_name = document.getElementById('update_name');
        var update_text = document.getElementById('update_text');
        var update_video = document.getElementById('update_video');
        update_id.value = id;
        update_name.value = name;
        update_text.value = text;
        update_video.value = video;
    }

    function updateReport(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "reports/update_report",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function(message) {
            $(".csrf").val(message.csrf_hash);
            $("#updateReport").trigger('click');
            document.getElementById('a_' + message.id).classList.add('change');
            document.getElementById('a_' + message.id).innerHTML = message.name;
            document.getElementById('text_' + message.id).classList.add('change');
            document.getElementById('text_' + message.id).innerHTML = message.text;
            document.getElementById('img_' + message.id).classList.add('change');
            var img = "<?php echo base_url()?>uploads/" + message.img;
            document.getElementById('img_' + message.id).setAttribute('src', img);

        })
    }
</script>
    </body>
</html>

