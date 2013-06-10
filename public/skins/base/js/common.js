
var IEVersion = 9;

$(function(){
    
    //
    
});


function tripCreate(){
    
    fadeInBlock('#profile-adding');
    fadeOutBlock('#profile-index');
    
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