<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>JAEHOON LEE - Welcome</title>
<style type="text/css">


    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
    display: block;
    }
    body {
    line-height: 1;
    }
    ol, ul {
    list-style: none;
    }
    blockquote, q {
    quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
    content: '';
    content: none;
    }
    table {
    border-collapse: collapse;
    border-spacing: 0;
    }
    
body {
	background-color: #fff;
    font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
}
.email, .email a { color:#777;}
#box {color:#000; margin: 80px auto; text-align:center;}
a:hover { color: #333333; }
.bold { color: #333333; font-weight: bold; }

.imagescroll {
    background: url("../assets/pic_main.jpg") repeat scroll 0 0 transparent;
    width: 100%;
    height: 596px;
    display: block;
    box-shadow: 0 0px 20px rgba(0,0,0,0.7) inset;
}

#box h1 {
    font-size: 3rem;
    margin-bottom: 30px;
    font-weight: 100;
}
#box p {
    font-size: 2rem;
    font-weight: 100;
    margin-top: 30px;
}

p.copyright {
    font-size: 0.88rem !important;
    color: #888;
}

</style>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script><!-- jQuery Load -->
			
<script>
<!-- Image Scroll -->	
    // speed in milliseconds
	var scrollSpeed = 60;
	
	// set the default position
	var current = 0;

	// set the direction
	var direction = 'h';

	function bgscroll(){

    	// 1 pixel row at a time
	    current -= 1;
   
	    // move the background with backgrond-position css properties
	    jQuery('div.imagescroll').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
   
	}

	//Calls the scrolling function repeatedly
	 setInterval("bgscroll()", scrollSpeed);	
			
</script>


</head>
<body>

<div id="box">

<h1>JAEHOON LEE</h1>
<div class="main_picture_scroll">
<div class="imagescroll">
</div>
<p>Welcome</p>
<p><a class="btn btn-large btn-danger" href="http://jaehoonlee.net/">> VIEW WORKS</a></p>
<p class="copyright">&copy; Jaehoon Lee | Webs development by <a href="http://simonalex.com/">Redfrost</a></p>
</div>   


</body>
</html>
