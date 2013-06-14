
var IEVersion = 9;

$(function(){
    
    $('.sidebar').hcSticky({
        top: 20
    });
    
    $('#message-send-form a.sbm').click(function(){
        messageSend();
    });    
    
    
});

(function($){
    //
})(jQuery);


function messageSend(){
    
    var message = $('#message-send-form textarea.msg').val();
    $('#message-send-form textarea.msg').val('');
    
    var msg = $('<div/>');
    msg.attr('class', 'msg-item');
    msg.html(message);
    msg.appendTo('#page-messages .message-box');
    
    
    $.ajax({
        url: '/message/send',
        type: 'POST',
        dataType: 'json',
        data: {
            to: 1,
            message: message 
        },
        success: function(data){
            console.log(data);
        }
    });
}


function addRoutComponent(el){
    el = $(el);
    $.template('myTemplate', $('#routComponent').html().trim() );
    var tpl = $.tmpl('myTemplate', {title: 'hello'});
    tpl.find('a.deleter').click(function(event){
        $(this).parents('.rout-component').fadeOut(100, function(){
            if ($(this).parents('.content').find('.rout-component').length == 1) {
                $(this).parents('.content').append('<div class="rout-component" style="margin: 10px auto; width: 143px;"><button class="btn btn-small" onclick="addRoutComponent(this)">Добавить маршрут</button></div>');
            }
            $(this).remove();
        });
    });
    //tpl.hide();
    
    el.fadeOut(100, function(){
        $(el.parents('.rout-component')[0]).after( tpl );
        //tpl.fadeIn();
        //$(el.parents('.rout-component')[0]).remove();
    });
}

function tripCreate(){
    
    
    fadeOutBlock('#profile-index', function(){
        fadeInBlock('#profile-adding');
    });
    
}

function fadeInBlock(el, callback){
    $(el).removeClass('invisible');
    if (IEVersion < 9) {
        $(el).css({
            "display":"block"
        });
        try {callback();} catch (e) {}        
    } else {
        $(el).fadeIn(300, function(){
            try {callback();} catch (e) {}
        });
    }    
}
function fadeOutBlock(el, callback){
    if (IEVersion < 9) {
        $(el).css({
            "display":"none"
        });
        try {callback();} catch (e) {}
    } else {
        $(el).fadeOut(300, function(){
            try {callback();} catch (e) {}
        });    
    }    
}
function fadeIn(options){
    options = options || {};
    var div = document.getElementById("fadeBlock");
    if (!div) {
        div = document.createElement('div');
        div.id = "fadeBlock";
        if (options.opacity) {
            $(div).css({
                "opacity": opacity,
                "filter": "alpha(opacity=" + opacity * 100 + ")"
            });
        }
        document.body.appendChild(div);
    }
    div.className = options.className || "";
    $(div).height( $(document).height() );
    $(div).show();
    return div;
}
function fadeOut() {
    $('#fadeBlock').remove();
}