function insertReport(context) {
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url');
    $.ajax({
        method: "POST",
        url: url + "reports/insert_report_img",
        data: all_inputs,
        dataType: "JSON",
        contentType: false,
        processData: false
    }).done(function (message) {
        $(".csrf").val(message.csrf_hash);
        $(".form-control").val('');
        $("#insertReport").trigger('click');
        $(".report_images").append("<div class='col-lg-3 col-md-3'><div class='panel-heading'><img src="+message.img+" class='img-thumbnail'><button type='button' class='btn btn-danger' onClick='deleteReportImg(this)' data-id="+message.id+">Удалить фото</button></div></div> ");
    })          
}
function deleteReportImg(context){
    var id = context.getAttribute('data-id');
    var hash = document.querySelector('.csrf').value;

    var url = document.querySelector('.url').getAttribute('data-url');
    $.ajax({
        method: "POST",
        url: url+"reports/delete_report_img",
        data: {id: id, csrf_test_name: hash},
        dataType: 'JSON',
    }).done(function(message){
        $(".csrf").val(message.csrf_hash);
        $(".form-control").val('');
        $(context).parent().parent().remove();
    })
}