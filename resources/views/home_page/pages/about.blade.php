@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="about_header">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h2 class="heading">
        know who we are
      </h2>
      <h4 class="sub-heading">
        We Don't Just Build IT Solutions, We Build Possibilities for You
      </h4>
    </div>
  </div>
</div>


<div class="about_us">
  <div class="container-fluid">
    <div class="padding-left-right">
      <div class="row">
        <div class="col-md-6">
          <div class="cnt">
            <h3 class="sr_h3_color_dark_blue">about us</h3>
            <h4 class="sr_h4_medium">We are the best IT Technology <br> Company Since 2020</h4>
            <p>
              A warm feeling to introduce ourselves and a promise to take the technology to the next level. Our hard work and committed team have made us capable to stand in the market at such a large level. It made us one of the best mobile and web development firm globally.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="wrap">
            <img src="{{ asset('home_page/resources/image/about_us/technology.png') }}" class="img-responsive" data-aos="zoom-out-left">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="about_creative">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h3 class="sr_h3_color_dark_blue">we are creative</h3>
      <p class="sr_p_desc">
        Miaki Media Limited is a full stack Creative & development agency which gives you an access to a pool of talented developers who will help realize your business goals by offering tech-driven solutions.
      </p>

      <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/01.png') }}">
            <h4 class="sr_h4_bold">mordern design</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/02.png') }}">
            <h4 class="sr_h4_bold">easy customize</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/03.png') }}">
            <h4 class="sr_h4_bold">it tech analysis</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/06.png') }}">
            <h4 class="sr_h4_bold">service & support</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/04.png') }}">
            <h4 class="sr_h4_bold">development</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="cnt" data-aos="zoom-in">
            <img src="{{ asset('home_page/resources/image/about_us/creative/05.png') }}">
            <h4 class="sr_h4_bold">brand strategy</h4>
          </div>
        </div>

        

      </div>
    </div>
  </div>
</div>



<div class="about_service">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h3 class="sr_h3_color_dark_blue">our professional services</h3>
      <p class="sr_p_desc">
        At T-Square, we strive to excel in the invention and development of the industry’s most advanced technologies including mobile apps, web, eCommerce, mCommerce, IoT, Wearables, AR/VR, cloud integration, cross-platform, on-demand, enterprise mobility and alike. We translate these technologies into value for our clients’ customers giving them professional and best-in-class services; thereby helping businesses throughout the world harness their full potential.
      </p>

      <div class="row">
        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/01.png') }}">
            <h4 class="sr_h4_medium">UI/UX Design</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/02.png') }}">
            <h4 class="sr_h4_medium">mobile apps</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/03.png') }}">
            <h4 class="sr_h4_medium">E-Commerce</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/04.png') }}">
            <h4 class="sr_h4_medium">web development</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/05.png') }}">
            <h4 class="sr_h4_medium">Cross-Platform</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/06.png') }}">
            <h4 class="sr_h4_medium">IoT & Wearable</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/07.png') }}">
            <h4 class="sr_h4_medium">AV/VR</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/08.png') }}">
            <h4 class="sr_h4_medium">cloud integration</h4>
          </div>
        </div>

        <div class="col-md-4 col-xs-4">
          <div class="cnt" data-aos="zoom-out-up">
            <img src="{{ asset('home_page/resources/image/about_us/service/09.png') }}">
            <h4 class="sr_h4_medium">enterprise mobility</h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection