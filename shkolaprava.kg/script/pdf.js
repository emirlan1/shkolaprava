function insertThemeFile(context) {
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url');
    $.ajax({
        method: "POST",
        url: url+"pdf_file/insert_category_file",
        data: all_inputs,
        dataType: "JSON",
        contentType: false,
        processData: false
    }).done(function (message) {
        $(".csrf").val(message.csrf_hash); // обрати внимание, что таким образом меняются все токены CSRF c классом csrf.
        $(".form-control").val('');
        $("#insertTheme").trigger('click');
        $("#table_themes_body").append("<tr><td style='background-color:white;'>"+message.name+"</td><td><button data-id="+message.id+" type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteCategory' onclick='deletePress(this)'>Удалить файл</button></td><td><a href='"+message.img+"'><button data-id="+message.id+" type='button' class='btn btn-success' >Скачать</button></td></a></tr>");
    });
}
function deletePress(context) {
    $('.btn').removeClass('pushed');
    var id = context.getAttribute('data-id');
    var delete_id = document.getElementById('delete_id');
    delete_id.value = id;
    $(context).addClass('pushed');  
}
function deleteCategory(context) {
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url');
    $.ajax({
        method: "POST",
        url: url+"pdf_file/delete_category",
        data: all_inputs,
        dataType: "JSON",
        contentType: false,
        processData: false
    }).done(function(message) {
        $(".csrf").val(message.csrf_hash);
        $("#deleteCategory").trigger('click');
        $('.pushed').parent().parent().remove();
        $('.pushed').removeClass('pushed');
    });
}
function updateThemeFirst(context){
        var id = context.getAttribute('data-id');
        var category_name = context.getAttribute('data-name');
        var category_dis = context.getAttribute('data-dis');
        console.log(id);
        document.getElementById('update_id').value = id;
        document.getElementById('update_name').value = category_name;
        document.getElementById('update_dis').value = category_dis;
        document.querySelector('.btn').classList.remove('pushed');
        context.classList.add('clicked');  
}