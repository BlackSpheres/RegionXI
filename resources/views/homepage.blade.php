@extends('layouts.master')
@section('content')
<section class="home-section home-parallax home-fade home-full-height" id="home">
  <div class="hero-slider">
    <ul class="slides">
      <li class="bg-dark-30 bg-dark" style="background-image:url(../images/city-hall.jpg);">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
            <div class="font-alt mb-40 titan-title-size-4">This is DAVAO</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Get Started</a>
          </div>
        </div>
      </li>
      <li class="bg-dark-30 bg-dark" style="background-image:url(../images/people.jpg);">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-2">Get to know davao's history<br/>and locals
              </div><a class="btn btn-border-w btn-round" href="about">Learn More</a>
            </div>
          </div>
        </li>
        <li class="bg-dark-30 bg-dark" style="background-image:url(../images/davao.jpeg);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-2">See the wonders of Davao through the camera's lenses</div>
              <a class="section-scroll btn btn-border-w btn-round" href="#about">Explore</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div class="main">
    <section class="module">
      
    </section>
  </div>
  @endsection