<!DOCTYPE html>
<html>
<head>
	<title>REGION XI- Home</title>
	<link rel="stylesheet" href="../css/design.css">
	<script src="../js/vendor/modernizr-2.7.1.min.js"></script>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<style type="text/css">
	@font-face {
		font-family: "BrownhillScript";
		src: url("../fonts/BillyOhio.ttf");
	}

	@font-face {
		font-family: "Innercity";
		src: url('../fonts/InnercityRegular.ttf');
	}

	/* background setup */
.background {
    background-repeat:no-repeat;
    /* custom background-position */
    background-position:50% 50%;
    /* ie8- graceful degradation */
    background-position:50% 50%\9 !important;
}

/* fullscreen setup */
html, body {
    /* give this to all tags from html to .fullscreen */
    height:100%;
}
.fullscreen,
.content-a {
    width:100%;
    height:100%;
    overflow:hidden;
}
.fullscreen.overflow,
.fullscreen.overflow .content-a {
    height:auto;
    min-height:100%;
}

/* content centering styles */
.content-a {
    display:table;
}
.content-b {
	display:table-cell;
    position:relative;
	vertical-align:middle;
	text-align:center;
	font-family: "BrownhillScript";
	font-size: 178px;
}

/* visual styles */
body{
    margin:0;
    font-family:sans-serif;
    font-size:28px;
    line-height:100px;
	color:#ffffff;
    text-align:center;
}
section {
	background:#9ed100;
}
.not-fullscreen {
    height:50%;
}
	
	</style>
</head>
<body>

<div class="fullscreen background parallax" style="background-image:url('../images/PEARLFARM.jpg');
" data-img-width="1600" data-img-height="1064" data-diff="100">
    <div class="content-a">
        <div class="content-b">
           Welcome to Davao
        </div>
    </div>
</div>
  
<div class="not-fullscreen background parallax" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_6643.jpg');" data-img-width="1600" data-img-height="1064" data-diff="100">
    <div class="content-a">
        <div class="content-b">
            Centered content
        </div>
    </div>
</div>


<!-- J A V A S C R I P T -->
<script type="text/javascript" src="../js/skrollr.min.js"></script>
	<script type="text/javascript">
	skrollr.init({
		smoothScrolling: false,
		mobileDeceleration: 0.004
	});
	</script>
<script type="text/javascript">
	if("ontouchstart" in window){
    document.documentElement.className = document.documentElement.className + " touch";
}
if(!$("html").hasClass("touch")){
    /* background fix */
    $(".parallax").css("background-attachment", "fixed");
}

/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() > h){ $(this).closest(".fullscreen").addClass("overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();

/* set parallax background-position */
function parallaxPosition(e){
    var heightWindow = $(window).height();
    var topWindow = $(window).scrollTop();
    var bottomWindow = topWindow + heightWindow;
    var currentWindow = (topWindow + bottomWindow) / 2;
    $(".parallax").each(function(i){
        var path = $(this);
        var height = path.height();
        var top = path.offset().top;
        var bottom = top + height;
        // only when in range
        if(bottomWindow > top && topWindow < bottom){
            var imgW = path.data("resized-imgW");
            var imgH = path.data("resized-imgH");
            // min when image touch top of window
            var min = 0;
            // max when image touch bottom of window
            var max = - imgH + heightWindow;
            // overflow changes parallax
            var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
            top = top - overflowH;
            bottom = bottom + overflowH;
            // value with linear interpolation
            var value = min + (max - min) * (currentWindow - top) / (bottom - top);
            // set background-position
            var orizontalPosition = path.attr("data-oriz-pos");
            orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
            $(this).css("background-position", orizontalPosition + " " + value + "px");
        }
    });
}
if(!$("html").hasClass("touch")){
    $(window).resize(parallaxPosition);
    //$(window).focus(parallaxPosition);
    $(window).scroll(parallaxPosition);
    parallaxPosition();
}
</script>
</body>
</html>