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
            <h3>Правила форума</h3>
                     <?php
                foreach ($first_theme as $theme) {
                    echo "<div class='rules'>
                        <a id='first_theme' href='" . base_url() . "one_theme/" . $theme->id . "'>" . $theme->theme_name ."</a>
                        <button class='btn btn-warning' data-toggle='modal' data-target='#updateTheme' onclick='updateThemePress(this)' data-id='" . $theme->id . "' data-theme_name='" .  $theme->theme_name. "'><span class='glyphicon glyphicon-edit'></span></button>    
                    </div>";
                }
            ?>        
                                        <form action="javascript:void(0)" onsubmit="searchThemes(this)">
                <input type="hidden" class="csrf" name="csrf_test_name" value="<?php echo $csrf_hash?>">
                <input required type="text" name="theme_name" style="width: 100%;" placeholder="Поиск тем">
                <button type="submit">Искать</button>
            </form>
<div class="container-fluid">
                                
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-info alert-dismissable ">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#insertTheme">Добавить тему</button><br>
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#insertCategory">Добавить категорию</button>
        </div>

        <div class="panel panel-sky">
            <div class="panel-heading">
                <h2>Темы</h2>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                <table class="table" id="table_themes">
           <?php
                $i = 0;
                foreach ($categories as $category) {
                $y = 0;  
                ?>
                <thead>
                  <tr>
                    <th colspan="3"><?php echo $category->category_name?></th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php           
                       $z = $cats_themes[$i];
                        foreach ($z as $row) {
                        ?>
                  <tr>
                      <td><?php echo $row['theme_name'] ?></td>
                      <td><?php echo $row['comments'] ?> комментов</td>
                      <td><?php echo $row['views'] ?> просмотров</td>
                      <td><?php echo $row['likes'] ?> лайков</td>
                  </tr>
                </tbody>
                <?php $y++;} 
                    
                    $i++;}?>
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

<div class="modal fade" id="deleteCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Удаление категории</h4>
            </div>
            <div class="modal-body">
                <form onsubmit="deleteCategory(this)" method="post" action="javascript:void(0)">
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

<div class="modal fade" id="updateCategory" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Редактирование категории</h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" onsubmit="updateCategory(this)">
                    <div class="form-group">
                        <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>"><br>
                        <input type="hidden" name="id" id="update_id">
                        <label for="update_name">Name:</label>
                        <input name="category_name" id="update_name" type="text" class="form-control">
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


<div class="modal fade" id="updateTheme" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Редактирование темы</h4>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" onsubmit="updateTheme(this)">
                    <div class="form-group">
                        <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>"><br>
                        <input type="hidden" name="id" id="update_theme_id">
                        <label>Name:</label>
                        <input name="theme_name" id="update_theme_name" type="text" class="form-control">
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

    function searchThemes(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "themes/search_themes",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash); // обрати внимание, что таким образом меняются все токены CSRF c классом csrf.
            $("#table_themes").html(message.themes);
        })
    }


    function updateThemePress(context) {
        var id = context.getAttribute('data-id');
        var theme_name = context.getAttribute('data-theme_name');
        var update_theme_id = document.getElementById('update_theme_id');
        var update_theme_name = document.getElementById('update_theme_name');
        update_theme_id.value = id;
        update_theme_name.value = theme_name;
    }

    function updateTheme(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "themes/update_theme",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            $("#updateTheme").trigger('click');
            document.getElementById('first_theme').classList.add('change');
            document.getElementById('first_theme').innerHTML = message.theme_name;
        })
    }


    function insertCategory(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "categories/insert_category",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash); // обрати внимание, что таким образом меняются все токены CSRF c классом csrf.
            $(".form-control").val('');
            $("#insertCategory").trigger('click');
            $("#table_categories").append("<tr class='info' id='ul_" + message.id + "'>" +
                "<td>" +
                    "<a id='a_" + message.id + "' href='<?php echo base_url()?>themes/" + message.id + "'>" + message.category_name + "</a>" +
                    "<button onclick='deletePress(this)' type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteCategory' data-id='" + message.id + "' data-name='" + message.category_name + "'><span class='glyphicon glyphicon-trash'></span></button> " +
                    "<button onclick='updatePress(this)' type='button' class='btn btn-warning' data-toggle='modal' data-target='#updateCategory' data-id='" + message.id + "' data-name='" + message.category_name + "'><span class='glyphicon glyphicon-edit'></span></button>" +
                "</td>" +
            "</tr>");
        })
    }

    function insertTheme(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "themes/insert_theme",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            $(".form-control").val('');
            $("#insertTheme").trigger('click');
            $("#table_themes").append("<tr id='tr_" + message.id + "'>" +
                "<td> " +
                    "<a id='a_" + message.id + "' href='<?php echo base_url()?>one_theme/" + message.id + "'>" + message.theme_name + "</a> " +
                "</td> " +
                "<td>" +
                    "0 комментов " +
                    "</td> " +
                "<td>" +
                    "0 просмотров " +
                "</td> " +
                "<td>" +
                "0 лайков " +
                "</td> " +
            "</tr>");
        })
    }

    function deletePress(context) {

        // при нажатии кнопки беру дата-атрибуты и вписываю значения в скрытые инпуты

        var id = context.getAttribute('data-id');
        var category_name = context.getAttribute('data-name');
        var delete_id = document.getElementById('delete_id');
        var delete_question = document.getElementById('delete_question');
        delete_id.value = id;
        delete_question.innerHTML = "Вы действительно хотите удалить категорию " + category_name + "?";
    }

    function deleteCategory(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "categories/delete_category",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function(message) {
            $(".csrf").val(message.csrf_hash);
            $("#deleteCategory").trigger('click');
            $("#ul_" + message.id).remove();
        });
    }

    function updatePress(context) {
        var id = context.getAttribute('data-id');
        var category_name = context.getAttribute('data-name');
        var update_id = document.getElementById('update_id');
        var update_name = document.getElementById('update_name');
        update_id.value = id;
        update_name.value = category_name;
    }

    function updateCategory(context) {
        var form = $(context)[0];
        var all_inputs = new FormData(form);
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "categories/update_category",
            data: all_inputs,
            dataType: "JSON",
            contentType: false,
            processData: false
        }).done(function(message) {
            $(".csrf").val(message.csrf_hash);
            $("#updateCategory").trigger('click');

            // присваиваю измененной категории новое имя и класс

            document.getElementById('a_' + message.id).classList.add('change');
            document.getElementById('a_' + message.id).innerHTML = message.category_name;
        })
    }



    function sortThemes(context) {
        var id = context.getAttribute('data-id');

        // при сортировке сначала удаляю класс order_by_pressed со всех кнопок, затем присваиваю этот класс на нажатую кнопку
        $('.order_by').removeClass('order_by_pressed');
        $('.order_by').eq(id).addClass('order_by_pressed');

        var order_by = context.getAttribute('data-order_by');
        $.ajax({
            method: "POST",
            url: "<?php echo base_url()?>" + "themes/sort_themes",
            data: {order_by: order_by, csrf_test_name: $(".csrf").val()},
            dataType: "JSON"
        }).done(function (message) {
            $(".csrf").val(message.csrf_hash);
            $("#table_themes").html(message.themes);
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
