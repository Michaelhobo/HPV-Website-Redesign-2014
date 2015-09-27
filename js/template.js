/** Toggle nav-toggle. */
/*var open, close;
open = function() {
    $("#nav-toggle").unbind("click");
    var navSize = "275px";
    if (screen.width <= 500) {
        navSize = "55%";
    };
    $("#nav-toggle").animate({right:"+=" + navSize}, 500);
    $("#mobile-nav").animate({left:"-=" + navSize}, 500);
    $("#nav-toggle img").toggleClass("toggle-icon-left")
        .toggleClass("toggle-icon-right");
    $("#nav-toggle").bind("click", close);
};
close = function() {
    $("#nav-toggle").unbind("click");
    $("#nav-toggle").animate({right:"0px"}, 500);
    $("#mobile-nav").animate({left:"100%"}, 500);
    $("#nav-toggle img").toggleClass("toggle-icon-left")
        .toggleClass("toggle-icon-right");
    $("#nav-toggle").bind("click", open);
};
$("#nav-toggle").bind("click", open);*/
var menu_open, menu_close;
menu_open = function() {
    $("#menu-toggle").unbind("click");
    var menuSize = "275px";
    if (screen.width <= 500) {
        menuSize = "55%";
    };
    $("#mobile-nav").animate({left:"-=" + menuSize}, 500);
    $("#dimmer").show().bind("click", menu_close);
};
menu_close = function() {
    $("#dimmer").unbind("click");
    $("#mobile-nav").animate({left:"100%"}, 500);
    $("#dimmer").hide();
    $("#menu-toggle").bind("click", menu_open);
};
$("#menu-toggle").bind("click", menu_open);
