<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Region XI - Davao Region | About</title>
    <link rel="stylesheet" href="../css/design.css">
    <link href="../lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="../lib/animate.css/animate.css" rel="stylesheet">
    <link href="../lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="../lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="../lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="../lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <script src="../lib/jquery/dist/jquery.js"></script>
    <script src="../lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../lib/wow/dist/wow.js"></script>
    <script src="../lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../lib/flexslider/jquery.flexslider.js"></script>
    <script src="../lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../lib/smoothscroll.js"></script>
    <script src="../lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <!-- Main stylesheet and color file-->
    <link href="../css/style.css" rel="stylesheet">
    <link id="color-scheme" href="../css/colors/default.css" rel="stylesheet">
    <script src="../js/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body>
    
    <main>
      <!--     <div class="page-loader">
        <div class="loader">Loading...</div>
      </div> -->
      <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">RegionXI</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#totop">Home</a></li>
              <li><a class="section-scroll" href="#services">Discover Davao</a></li>
              <li><a class="section-scroll" href="{!! url('/gallery'); !!}">Gallery</a></li>
              <li><a class="section-scroll" href="#alt-features">News and Events</a></li>
              <li><a class="section-scroll" href="#alt-features">About</a></li>
              <li><a class="section-scroll" href="#team">Forum</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </main>
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