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
            <li><a class="wow fadeInUp" href="#" data-filter=".occidental" data-wow-delay="0.2s">Davao Occidental</li>
          </ul>
        </div>
      </div>
      <ul class="works-grid works-grid-masonry works-grid-3 works-hover-d" id="works-grid">
        @foreach ($galleryPics as $pic)
          <li class="work-item {{$pic->tag}}">
          <a href="#">
            <div class="work-image">
              <img src="../images/{{$pic->filename}}" alt="Portfolio Item"/>
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">{{$pic->displayname}}</h3>
              <div class="work-descr">
              @if($pic->tag === 'valley')
              Compostella Valley
              @elseif($pic->tag === 'norte')
              Davao Del Norte
              @elseif($pic->tag === 'sur')
              Davao Del Sur
              @elseif($pic->tag === 'oriental')
              Davao Del Oriental
              @elseif($pic->tag === 'occidental')
              Davao Del Occidental
              @endif
              </div>
            </div>
          </a>
        </li>
        @endforeach




       <!-- 
 


     
        
           
     
                          <li class="work-item illustration webdesign"><a href="portfolio_single_featured_image2.html">
                            <div class="work-image"><img src="../images/croc.jpg" alt="Portfolio Item"/></div>
                            <div class="work-caption font-alt">
                              <h3 class="work-title">Crocodile Park</h3>
                              <div class="work-descr">Davao del Sur</div>
                            </div></a></li>
                            !-->
                  </ul>
                </div>
              </section>
            </div>
            @endsection