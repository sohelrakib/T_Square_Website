@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="software">

  <div class="service_header">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h2 class="heading">
          <span class="bold">platform managed</span>
          <span class="light">services</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/platform/overview.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">we are expert on platform managed services</h3>
            <p>
              We believe every challenge is unique and worthy of tailored technology. 
              That’s why we flex our Managed Services and approach to meet you where you are, 
              and take you where you want to go by managing their Operations, Strategies, 
              Deployment, Migration, Automation, Security, Optimization and 24/7 Management. 
              <br><br>
              It helps you sustain higher service standards both day in and day out while you focus on your client.
            </p>
            <a class="btn btn-success sr_request_quote"  href="{{route('contact-us')}}">request a quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="service_left_points">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-6">
            <h4 class="sr_h4_color_red">discover platform managed</h4>
            <h3 class="sr_h3_color_dark_blue">what we have managed?</h3>
            <p class="sr_head_desc">
              As one of the top Managed services companies in Bangladesh, 
              we have helped customers to build their architecture design, 
              deployment, migration, automation, security, optimization and 24/7 Management. 
              It helps you sustain higher service standards both day in and day out while you focus on your client.
            </p>
            <h4 class="sr_h4_bold">Enterprise Web Development</h4>
            <p>
              Being a leading web design company & web development service provider, 
              we offer quality Web Application Development services to our diversified 
              clients with our astute planning and perfect execution laid by our professional web application developers.
            </p>

            <h4 class="sr_h4_bold">Mobile App Development</h4>
            <p>
              Working with corporations & renowned development organizations, 
              our web and mobile teams have built scalable & thoughtful holistic 
              solutions that give your business a strong online presence on a large scale.
            </p> 
              
            <h4 class="sr_h4_bold">Digital Transformation</h4>
            <p>
              We collaborate in developing a digital transformation strategy that is 
              aligned to your key business objectives and leverages modern technologies 
              to produce a significant competitive advantage. With a comprehensive suite of 
              services to aid in digital transformation, we can help support and accelerate your organization’s journey.
            </p>   
          </div>
          <div class="col-md-6">
            <div class="img-cnt">
              <img src="{{ asset('home_page/resources/image/service_app/software/soluation.png') }}" class="img-responsive" data-aos="fade-left">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="service_development">
    <div classs="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-4">
            <div class="cnt" data-aos="zoom-in-up">
              <img src="{{ asset('home_page/resources/image/service_app/platform/manage1.png') }}" class="img-responsive">
              <h4 class="sr_h4_medium text-center">Enterprise <br>Web Development</h4>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="zoom-in-up">
              <img src="{{ asset('home_page/resources/image/service_app/platform/manage2.png') }}" class="img-responsive">
              <h4 class="sr_h4_medium text-center">Mobile <br>App Development</h4>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="zoom-in-up">
              <img src="{{ asset('home_page/resources/image/service_app/platform/manage3.png') }}" class="img-responsive">
              <h4 class="sr_h4_medium text-center">Digital <br>Transformation</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="service_we_provide">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">why Hiring T-Square</h4>
        <h3 class="sr_h3_color_dark_blue">Why You Should Be Hiring T-Square</h3>
        <p class="sr_p_desc">
          T-Square is a full stack development agency which gives you an access 
          to a pool of talented developers who will help realize your business goals by 
          offering tech-driven solutions. Our team is highly experienced in a wide variety 
          of technologies which keeps us in a position to meet all your requirements. 
          By working with us you will enjoy the following benefits.
        </p>

        <div class="row">
          <div class="col-md-2 col-md-offset-2 col-xs-6">
            <img src="{{ asset('home_page/resources/image/service_app/platform/hiring1.png') }}" class="img-responsive" data-aos="zoom-in-down">
          </div>
          <div class="col-md-2 col-xs-6">
            <img src="{{ asset('home_page/resources/image/service_app/platform/hiring2.png') }}" class="img-responsive" data-aos="zoom-in-down">
          </div>  
          <div class="col-md-2 col-xs-6">
            <img src="{{ asset('home_page/resources/image/service_app/platform/hiring3.png') }}" class="img-responsive" data-aos="zoom-in-down">
          </div>  
          <div class="col-md-2 col-xs-6">
            <img src="{{ asset('home_page/resources/image/service_app/platform/hiring4.png') }}" class="img-responsive" data-aos="zoom-in-down">
          </div>  
        </div>  
      </div>
    </div>  
  </div> 
  
  
</div>
@endsection