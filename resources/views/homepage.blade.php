@extends('layouts.master')
@section('content')
<section class="home-section home-parallax home-fade bg-dark-30" id="home" 
  data-background="../images/city-hall.jpg">

        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">This is DAVAO</div>
            <a class="section-scroll btn btn-border-w btn-round" href="#about">Get Started</a>
          </div>
        </div>
    
  </section>
  <div class="main">
    <section class="module-extra-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                <div class="callout-text font-alt">
                  <h4 style="margin-top: 0px; font-;">Planning to book a vacation?</h4>
                  <p style="margin-bottom: 0px;">We are always here for you</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-2">
                <div class="callout-btn-box"><a class="btn btn-w btn-round" href="#">Book now!</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-5">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-twitter"></span></div>
                  <h3 class="features-title font-alt">Twitter</h3>See what people are tweeting about #Davao.
                </div>
                            <a class="twitter-timeline"  href="https://twitter.com/hashtag/Davao" data-widget-id="896119165332803584">#Davao Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
              </div>
              <div class="col-md-7">
                <div class="features-item">
                  <div class="features-icon"><span class="icon-cloud"></span></div>
                  <h3 class="features-title font-alt">Weather</h3>See how the weather is at Davao Region.
                </div>

                <!-- goolemap with weather filter here -->
              </div>
              
              </div>
            </div>
          
        </section>
        <section class="module bg-dark parallax-bg landing-screenshot" data-background="../images/kadayawan.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Upcoming Events</h2>
              </div>
            </div>
            <div class="row client">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12"><img src="../images/aug1.jpg" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="../images/aug2.jpg" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="../images/aug3.jpg" alt="App Screenshot"></div>
                </div>
                <!--
                <div class="owl-item">
                  <div class="col-sm-12"><img src="assets/images/landing/screenshot4.jpg" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="assets/images/landing/screenshot5.jpg" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="assets/images/landing/screenshot6.jpg" alt="App Screenshot"></div>
                </div>
                -->

              </div>
            </div>
          </div>
          </section>
    <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
          <div class="col-xs-12 col-md-6 side-image" data-background="../images/pearl-farm-davao.jpg"></div>
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-left">About Davao Region</h2>
                  <div class="module-subtitle font-serif align-left">Region XI is composed of five provinces: 
                  Compostella Valley, Davao del Norte, Davao del Sur, Davao Oriental, and Davao Occidental. <br>
                  Its capital Davao City lies inside Davao del Sur.</div>
                  <p>Davao Region is located at the southeast of Mindanao surrounding the Davao Gulf. It is bounded on the North by the provinces of Surigao del Sur, Agusan del Sur, and Bukidnon; the Philippine Sea in the East; and in the West by the Central Mindanao provinces. </p>
                  <p> In the broader geographic context, the Davao Region faces Micronesia in the Southern Pacific Ocean to the East, and the Eastern Indonesia through the Celebes Sea to the South.</p>
                 
                     <a class="btn btn-border-d btn-circle" href="{{!! url('/about'); !!}}" align="right">Read More</a>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
     <section class="module bg-dark-60 parallax-bg" data-background="../images/davao.jpg" style="background-position: 50% 15%;">
      <div class="container">
      <h2 class="module-title font-alt">Explore the Region</h2>
     <ul class="works-grid works-grid-gut works-grid-5 works-hover-w" id="works-grid">
              <li class="work-item illustration webdesign"><a href="#">
                  <div class="work-image"><img src="../images/home-compvall.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Compostella Valley</h3>
                     <div class="work-descr">Awao Falls</div>
                  </div>
                    </a></li>
              <li class="work-item marketing photography"><a href="#">
                  <div class="work-image"><img src="../images/home-delnorte.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Davao Del Norte</h3>
                     <div class="work-descr">Pearl Farm</div>
                  </div>
                </a></li>
              <li class="work-item illustration photography"><a href="#">
                  <div class="work-image"><img src="../images/home-city.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Davao City</h3>
                    <div class="work-descr">Seawalk</div>
                  </div></a></li>
              <li class="work-item marketing photography"><a href="#">
                  <div class="work-image"><img src="../images/home-delsur.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Davao Del Sur</h3>
                    <div class="work-descr">Mt. Apo</div>
                  </div></a></li>
              <li class="work-item illustration webdesign"><a href="#">
                  <div class="work-image"><img src="../images/home-oriental.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Davao Oriental</h3>
                    <div class="work-descr">Pusan Point</div>
                  </div></a></li>
              </ul>
        
      </div>
    </section>
  </div>
  
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>

<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: auto;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>
<script type="text/javascript">
function load() {
var feed ="http://www.mindanaodailynews.com/category/region-11/feed/";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);
</script>
  @endsection
