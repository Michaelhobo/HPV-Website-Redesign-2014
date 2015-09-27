
/*var expanded = false;*/
/** The options animation. */
/*$(function() {
        $(".topic").click(function(event) {
            if (!expanded) {
            $(".other-topic").css("margin", "4%");
            $(this).css("width", w*2/3 + "px").css("height", w*2/3 + "px");
            
            $(".topic").not(this)
                .fadeOut(50)
                //.animate({width:w/3 + "px", height:w/3 + "px", left:"0px"}, 150)
                .css("width", w/3 + "px").css("height", w/3 + "px").css("left", "0px")
                .queue(function() {
            $(this).appendTo("#op_expanded_bottom").css("height", "100%").css("width", "50%").css("margin", "0px").fadeIn(50).dequeue();
            });
            $(this).fadeOut(50).css("left", "0px")
                //.animate({left: "0px"}, 300)
                .queue(function() {
                    $(this).appendTo("#op_expanded_top").css("width", "100%").css("height", "100%").css("margin", "0px").fadeIn(50).dequeue();
                });
            $(".op_expanded").show();
            $(".description").fadeIn();
            expanded = true;
            } else {
                if ($(this).parent().attr("id") == "op_expanded_top") {
                    
                } else {
                    $("#op_expanded_top").children().appendTo("#op_expanded_bottom")
                        .css("width", "50%");
                    $(this).appendTo("#op_expanded_top").css("width", "100%");
                }
            }
        });
});*/
/** The gallery animations. */
/*var urls = ["http://affinitycycles.com/wp-content/uploads/2012/12/Affinity-Raekwon-Wu-Charity-bike-web.jpg", "http://www.njnwcoa.com/images/chipmunk.jpg", "http://images1.fanpop.com/images/photos/2600000/Giraffe-wild-animals-2614055-500-399.jpg", "http://images5.fanpop.com/image/photos/27000000/naruto-wallpaper-anime-naruto-all-character-27036019-500-375.jpg"];
var images = new Array();
var u = 0;
for (u = 0; u < urls.length; u ++) {
    var image = new Image();
    image.src = urls[u];
    images.push(image);
}
var back = 0;
var timerId = setInterval(function () {
    var rand = Math.floor(Math.random() * images.length);
    change(rand);
}, 5000);
var i = 0;
function change(loadNum) {
    var front = $("#foreground");
    front.fadeOut("slow");
    $(images[loadNum]).id = "foreground";
    $(".Subtitle").html(images[loadNum].src);
};

function load(front) {
    var rand = Math.floor(Math.random() * numImages);
    front.attr("src", images[rand]);
    $(".Subtitle").html(rand + images[rand]);
};
*/
