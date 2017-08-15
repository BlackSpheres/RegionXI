
<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Region XI - Davao Region | About</title>
	<link rel="stylesheet" href="../css/design.css">
	<script src="../js/vendor/modernizr-2.7.1.min.js"></script>
</head>
<body>
 
 	<header class="header">
 	
      <div id="wrapper" class="inner">
          <nav>
          	<a href="#">FORUM</a>
          	<a href="#">ABOUT</a>
          	<a href="#">GALLERY</a>
          	<a href="#">DISCOVER DAVAO</a>
            <a href="#" style="background-color: orange; padding: 10px; border-radius: 5px; margin-top:10px; ">VISIT US</a>
          </nav>
      </div>
   </header>
   @yield('content')

    <footer>
    	<table>
    		<tr>
    			<th>TALK TO US<br><hr align="left"></th>
    			<th>CONTACT US<br><hr align="left"></th>
    			<th>SOCIAL LINKS<br><hr align="left"></th>
    		</tr>
    		<tr >
    			<td>
    				<blockquote>
    				<form>
    				
  						<input type="name" id="username" placeholder="Enter name">
    					<input type="email" id="email" placeholder="Enter email"> 	
    					<textarea placeholder="Message us! How can we help?"></textarea>
    					
    					<button type="submit" id="submit">SUBMIT</button>
    				</form>	
    				</blockquote>
    			</td>
    			<td>
    				<blockquote>
    					email: regionXI@support.com<br>
    					phone: (02) 961-89-83<br><Br><Br><br><Br>
    				</blockquote>
    			</td>
    				
    			<td>
    			<blockquote>
    				<a href="#"><img src="images/twitter.png" width="60px" height="60px"></a>
    				&nbsp;
    				<a href="#"><img src="images/facebook.png" width="60px" height="60px"></a>
    				<br><Br><br><Br><br>
    			</blockquote>
    			
    			</td>
    		</tr>
    		<tr>
    		</tr>
    	</table>
    </footer>

    <script type="text/javascript" src="../js/_main.js"></script>
	<script type="text/javascript" src="../js/imagesloaded.js"></script>
	<script>
		window.jQuery || document.write('<script src="../js/vendor/jquery-1.9.1.min.js"><\/script>')
	</script>
    <script type="text/javascript" src="../js/skrollr.js"></script>
	<script type="text/javascript">
	window.onload = function() {
		skrollr.init({
			forceHeight: false
		});
	}
	</script>
	<script type="text/javascript">
	// create the back to top button
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

	// change the value with how many pixels scrolled down the button will appear
	var amountScrolled = 150;

	$(window).scroll(function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.back-to-top').fadeIn('slow');
		} else {
			$('a.back-to-top').fadeOut('slow');
		}
	});

	$('a.back-to-top, a.simple-back-to-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
	</script>

</body>
</html>