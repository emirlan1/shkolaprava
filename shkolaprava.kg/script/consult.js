function searchThemes(context) {
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url'); 
    $.ajax({
        method: "POST",
        url: url+"U_forum_index_control/search_themes",
        data: all_inputs,
        dataType: "JSON",
        contentType: false,
        processData: false
    }).done(function (message) {
        console.log(message.html);
        $(".csrf").val(message.csrf_hash);
        $(".searh_table").html(message.html);
        $('.empty_searh').remove();
    })
}
function commentsLoadMore(context){
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url'); 
    var offset = $(context).attr('data-limit');
    var real_offset = parseInt(offset) + 10;
    var theme = $(context).attr('data-theme');
    var csrf = $('.csrf').val();
    $.ajax({
        method: "POST",
        url: url+"U_consult_control/commentsLoadMore",
        data: {limit: real_offset, theme: theme,csrf_test_name: csrf},
        dataType: "JSON",
    }).done(function (message) {
        console.log(message);
        $('.div_comments_load_more').append(message.html);
        $(".csrf").val(message.csrf_hash);
    })
}
function forumComment(context){
    var form = $(context)[0];
    var all_inputs = new FormData(form);
    var url = document.querySelector('.url').getAttribute('data-url'); 
    $.ajax({
        method: "POST",
        url: url+"U_consult_control/comment",
        data: all_inputs,
        dataType: "JSON",
        contentType: false,
        processData: false
    }).done(function (message) {
        console.log(message);
        if(message.error == 1){
            $(".comment_error").html('Данная тема удалена или находится вне доступа');
        }
        if(message.error == 2){
            $(".comment_error").html('Введите сообщение');
        }
        if(message.error == 3){
            $(".comment_error").html('Лимит сообщения 20000 символов');
        }
        if(message.error == 0){
            $(".new_comments").prepend('<div class="card-body"><div class="row"><div class="col-md-2"><img src="'+message.user_pic+'" class="img img-rounded img-fluid" /> <p class="text-secondary text-center">Сейчас</p></div><div class="col-md-10"><span><h4>'+message.user_name+'</h4></span><div class="clearfix"></div><p class="mt-4">'+message.text+'</p><p><a class="float-right btn btn-outline-primary ml-2" href="#send"> <i class="fa fa-reply"></i>Ответить</a></p></div></div></div>');  
        }
        if(message.error == 4){
            var html = $('.etot').parent().parent().parent();
            html.append('<div class="card card-inner"><div class="card-body"><div class="row"><div class="col-md-2"><img src="'+message.user_pic+'" class="img img-rounded img-fluid" /><p class="text-secondary text-center">сейчас</p></div><div class="col-md-10"><span><a class="float-left" href="#">'+message.user_name+'</a></span><span><i class="fa fa-angle-right ml-2 fa-lg"></i></span><span><strong>'+message.answer_name+'</strong></span><p class="mt-4">'+message.text+'</p></div></div></div>');
        }
        $(".csrf").val(message.csrf_hash);
    })
}
function commentReply(context){
   $('.btn').removeClass('etot');
   $id =  $(context).attr('data-id');
   $name = $(context).attr('data-name');
    $('.answer_hide').css('display','block');
    $('.answer_name').html($name);
    $('.com_id').val($id);
    $(context).addClass('etot');
}
function cancelReply(context){
    $('.answer_hide').css('display','none');
    $('.answer_name').html('');
    $('.com_id').val('0');
}

