
var IEVersion = 9;

$(function(){
    
    //
    
});

(function($){

    var model = [
    {  
        name: "John",  address: "1, a road, a town, a county, a postcode",  tel: "1234567890",  site: "www.ruseller.com", pic: "/img/john.jpg",  deleteMe: function () { viewModel.people.remove(this); }
    }, 
    {  
        name: "Jane",  address: "2, a street, a city, a county, a postcode",  tel: "1234567890",  site: "www.ruseller.com",  pic: "/img/jane.jpg",  deleteMe: function () { viewModel.people.remove(this); }
    }, 
    {  
        name: "Fred",  address: "3, an avenue, a village, a county, a postcode",  tel: "1234567890",  site: "www.ruseller.com",  pic: "/img/fred.jpg",  deleteMe: function () { viewModel.people.remove(this); }
    }, 
    {  
        name: "Freda",  address: "4, a street, a suburb, a county, a postcode",  tel: "1234567890",  site: "www.ruseller.com",  pic: "/img/jane.jpg",  deleteMe: function () { viewModel.people.remove(this); }
    }
    ], 
    viewModel = { people: ko.observableArray(model)};

    ko.applyBindings(viewModel);

    
})(jQuery);

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