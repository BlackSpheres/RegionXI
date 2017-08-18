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
              <li><a href="{!! url('/'); !!}">Home</a></li>
              <li><a class="section-scroll" href="#services">Discover Davao</a></li>
              <li><a class="section-scroll" href="{!! url('/gallery'); !!}">Gallery</a></li>
              <li><a class="section-scroll" href="#alt-features">News and Events</a></li>
              <li><a class="section-scroll" href="#alt-features">About</a></li>
              <li><a class="section-scroll" href="{!! url('/forums'); !!}">Forum</a></li>
              
            </ul>
          </div>
        </div>
      </nav>
    </main>

    @yield('content')
    <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Us</h5>
                  <p>We are a team assigned to make a website about the bountiful land of Davao and we're greatly exhausted pero keri lang.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">regionXI@mail.com</a></p>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">Map</h5>
                  <div id="maps">
                  <iframe src="https://snazzymaps.com/embed/10266" width="100%" height="250px" style="border:none;">
                  </iframe>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="widget">
                  <h5 class="widget-title font-alt">Contact Us</h5>
                   <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control input-sm" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control input-sm" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="6" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-border-w btn-circle btn-block" type="submit">Submit</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
        </div>
        
  <hr class="divider-d">
  <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">RegionXI</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
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

  </body>
</html>