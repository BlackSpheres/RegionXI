@extends('layouts.master')
@section('content')
<section class="home-section bg-dark-60 portfolio-page-header parallax-bg" id="home" style="background-image:url(../images/gallery2.jpg);">
  <div class="titan-caption">
    <div class="caption-content">
      
      <div class="font-alt mb-40 titan-title-size-4">Gallery</div><a class="section-scroll btn btn-border-w btn-round" href="#portfolio">Explore</a>
    </div>
  </div>
</section>
<div class="main">
  <section class="module" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="filter font-alt" id="filter">
            <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
            <li><a class="wow fadeInUp" href="#" data-filter=".valley" data-wow-delay="0.2s">Compostella Valley</li>
            
            <li><a class="wow fadeInUp" href="#" data-filter=".norte" data-wow-delay="0.4s">Davao del Norte</a></li>
            <li><a class="wow fadeInUp" href="#" data-filter=".sur" data-wow-delay="0.6s">Davao del Sur</a></li>
            <li><a class="wow fadeInUp" href="#" data-filter=".oriental" data-wow-delay="0.6s">Davao Oriental</a></li>
            <li><a class="wow fadeInUp" href="#" data-filter=".city" data-wow-delay="0.2s">Davao Occidental</li>
          </ul>
        </div>
      </div>
      <ul class="works-grid works-grid-masonry works-grid-3 works-hover-d" id="works-grid">
        <li class="work-item sur"><a href="#">
          <div class="work-image"><img src="../images/mt-apo.jpg" alt="Portfolio Item"/></div>
          <div class="work-caption font-alt">
            <h3 class="work-title">Mount Apo</h3>
            <div class="work-descr">Davao del Sur</div>
          </div></a></li>
          <li class="work-item city"><a href="#">
            <div class="work-image"><img src="../images/eagol.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Philippine Eagle</h3>
              <div class="work-descr">Davao City</div>
            </div></a></li>
            <li class="work-item city"><a href="#">
              <div class="work-image"><img src="../images/lonwa.jpg" alt="Portfolio Item"/></div>
              <div class="work-caption font-alt">
                <h3 class="work-title">Lon Wa Buddhist Temple</h3>
                <div class="work-descr">Davao City</div>
              </div></a></li>
              <li class="work-item city"><a href="#">
                <div class="work-image"><img src="../images/davao-baywalk.jpg" alt="Portfolio Item"/></div>
                <div class="work-caption font-alt">
                  <h3 class="work-title">Davao Baywalk</h3>
                  <div class="work-descr">Davao City</div>
                </div></a></li>
                <li class="work-item city"><a href="portfolio_single_featured_video1.html">
                  <div class="work-image"><img src="../images/PEARLFARM.jpg" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">Pearl Farm Resort</h3>
                    <div class="work-descr">Davao del Norte</div>
                  </div></a></li>
                  <li class="work-item oriental"><a href="portfolio_single_featured_video2.html">
                    <div class="work-image"><img src="../images/davao-oriental.jpg" alt="Portfolio Item"/></div>
                    <div class="work-caption font-alt">
                      <h3 class="work-title">Davao Oriental</h3>
                      <div class="work-descr">Davao Oriental</div>
                    </div></a></li>
                    <li class="work-item marketing webdesign"><a href="portfolio_single_featured_image1.html">
                      <div class="work-image"><img src="../images/rizal.jpg" alt="Portfolio Item"/></div>
                      <div class="work-caption font-alt">
                        <h3 class="work-title">Rizal Park</h3>
                        <div class="work-descr">Davao del Sur</div>
                      </div></a></li>
                      <li class="work-item marketing"><a href="portfolio_single_featured_slider1.html">
                        <div class="work-image"><img src="../images/1201pearlfarm.jpg" alt="Portfolio Item"/></div>
                        <div class="work-caption font-alt">
                          <h3 class="work-title">Pearl Farm Resort</h3>
                          <div class="work-descr">Davao del Norte</div>
                        </div></a></li>
                        <li class="work-item illustration photography"><a href="portfolio_single_featured_slider2.html">
                          <div class="work-image"><img src="../images/sanpedro.jpg" alt="Portfolio Item"/></div>
                          <div class="work-caption font-alt">
                            <h3 class="work-title">San Pedro Cathedral</h3>
                            <div class="work-descr">Davao del Sur</div>
                          </div></a></li>
                          <li class="work-item illustration marketing"><a href="portfolio_single_featured_video1.html">
                            <div class="work-image"><img src="../images/chinatown.jpg" alt="Portfolio Item"/></div>
                            <div class="work-caption font-alt">
                              <h3 class="work-title">Chinatown</h3>
                              <div class="work-descr">Davao del Sur </div>
                            </div></a></li>
                            <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image2.html">
                              <div class="work-image"><img src="../images/croc.jpg" alt="Portfolio Item"/></div>
                              <div class="work-caption font-alt">
                                <h3 class="work-title">Crocodile Park</h3>
                                <div class="work-descr">Davao del Sur</div>
                              </div></a></li>
                            </ul>
                          </div>
                        </section>
                      </div>
                      @endsection