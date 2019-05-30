<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url()?>script/report.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>One new</title>
</head>
<body>
<div class="container">
    <div class="url" data-url="<?php echo base_url()?>"?></div>
    <a href="<?php echo base_url()?>reports">Ко всем репортажам</a>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <?php
            foreach ($one_report as $info_report) {
                $report_id = $info_report->id;

                echo "<div class='panel panel-default'><div class='panel-heading'><h3 class='centered'>Название:  " . $info_report->name . "</h3></div></div>";
                echo "<div class='panel panel-default'><div class='panel-heading'><h5>Описание: <br>" . $info_report->text . "</h5></div></div>";
                echo "<div class='panel panel-default'><div class='panel-heading'><h5>Дата: " . date('d.m.Y',$info_report->date) . "</h5></div></div>";
                echo "<div class='panel panel-default'><div class='panel-heading'><h5>Главное Фото:</h5> <br><img src='" . base_url()."uploads/" . $info_report->img . "' class='img-thumbnail' style='width: 500px;'> </div></div>";
            }
            ?>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class='panel panel-default'><div class='panel-heading'><button type="button" class="btn btn-success" data-toggle='modal' data-target='#insertReport'>Добавить фото для слайдера</button></div></div>
        </div>
        <div class='panel panel-default report_images'>
            <?php foreach ($report_img as $row) {?>
            <div class="col-lg-3 col-md-3">
                <div class='panel-heading'>
                    <img src='<?php echo base_url()?>uploads/report_img/<?php echo $row['report_image']?>' class='img-thumbnail' >
                    <button type="button" class="btn btn-danger" onClick="deleteReportImg(this)" data-id="<?php echo $row['id']?>">Удалить фото</button>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="col-lg-12 col-md-12">
           
             <div class='panel panel-default'>
                  
                 <div class='panel-heading'>
                     Видео:
                    <iframe src="<?php echo $one_report[0]->video ?>" style="width: 100%; height: 720px;"></iframe>
                 </div>
             </div>
        </div>
    </div>
    <div class="modal fade" id="insertReport" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавление фотографии для слайдера</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="javascript:void(0)" onsubmit="insertReport(this)" enctype="multipart/form-data">
                    <label>Фото:</label>
                    <input type="file" name="img" required>
                    <input type="hidden" name="id" id="id" value="<?php echo $one_report[0]->id?>">
                    <input class="csrf" type="hidden" name="csrf_test_name" value="<?php echo $csrf_hash; ?>">
                    <button class="btn btn-success center-block">Добавить</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>