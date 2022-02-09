@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="website">

  <div class="service_header">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h2 class="heading">
          <span class="bold">website</span>
          <span class="light">design & development</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/website/design_and_dev.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">web design & development</h3>
            <p>
              We at T-Square offer Mobile App development solutions to turn a client’s business 
              need into an idea for a smartphone app. Several of our robust functional solutions 
              speak for themselves in various application stores. From ecommerce, enterprise, games, 
              to utility apps, we have developed multiple user-friendly products that have enhanced 
              business operations of our clients.  
              <br><br>
              With expertise in React Native, Android, iOS and all other 
              cross-platform app solutions, our developers can help in designing, developing and deploying a 
              smartphone application that caters to your business needs. Our transparent approach ensures 
              that our client’s budget, expectations, milestones, and objectives are all weaved together 
              for a perfect app solution.  
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
            <h4 class="sr_h4_color_red">responsive design</h4>
            <h3 class="sr_h3_color_dark_blue">why should i use responsive website design</h3>
            <p class="sr_head_desc">
              Responsive Design gives you the flexibility to meet future needs. Responsive website design enables your website to look good and be easy to use regardless of the device on which it is seen. It dynamically resizes its content and imagery for a variety of different screen sizes to ensure the maximum effectiveness on desktops, smartphones and tablets.
            </p>
            <h4 class="sr_h4_bold">Rapidly growing mobile usage</h4>
            <p>
              Mobile web usage is growing at an extremely rapid rate that presents enormous opportunities for vendors. If a website is not optimized for mobile use, there is the potential of leaving more business on the table than you might with a responsive site. MVI has helped many clients reap increased sales on desktop and mobile devices
            </p>

            <h4 class="sr_h4_bold">Efficient in terms of both time and cost</h4>
            <p>
              Responsive website design can dramatically reduce development time and cost. Rather than spending the time and resources building a separate mobile website in addition to your traditional desktop website, the responsive design approach enables you to optimize your business for both desktop and mobile with a single website.
            </p>  
          </div>
          <div class="col-md-6">
            <img src="{{ asset('home_page/resources/image/service_app/website/left_point.png') }}" class="img-responsive" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="service_our_design_and_dev">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">services we are provided</h4>
        <h3 class="sr_h3_color_dark_blue">our design and development services</h3>
        <p class="sr_p_desc">
          T-Square web design & development is the ideal solution for such organizations. Custom web development is what we love, and live every day.
        </p>
        <div class="row">
          <div class="col-md-3">
            <div class="cnt" data-aos="zoom-out">
              <img src="{{ asset('home_page/resources/image/service_app/website/design/icon1.png') }}">
              <h4 class="sr_h4_medium">Website Design & Development</h4>
              <p>
                We believe in excellent web performance for your organization to be sustained in the virtual reality nicely. Our efficient website designers and software engineers fulfill your exact requirements that you need for your personal or business websites.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="cnt" data-aos="zoom-out">
              <img src="{{ asset('home_page/resources/image/service_app/website/design/icon2.png') }}">
              <h4 class="sr_h4_medium">E-commerce Website</h4>
              <p>
                Designing an effective  e-commerce website & Create user-friendly elements.  Clutter-free. Simple. Easy to navigate. Intuitive. Features like breadcrumb navigation and dropdown menus help achieve these goals.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="cnt" data-aos="zoom-out">
              <img src="{{ asset('home_page/resources/image/service_app/website/design/icon3.png') }}">
              <h4 class="sr_h4_medium">Custom Content Management System</h4>
              <p>
                Depending on a client's needs and staffing, a CMS can be designed for use by a technology-savvy webmaster, or it can be so simple and intuitive that even the most technologically-challenged editors can use it effectively.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="cnt" data-aos="zoom-out">
              <img src="{{ asset('home_page/resources/image/service_app/website/design/icon4.png') }}">
              <h4 class="sr_h4_medium">SEO Optimization & Analysis</h4>
              <p>
                We always help you to promote your business globally and make your business more meaningful to sustain in the virtual world. So we always keep updating our skills and technology during SEO service.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="service_technologies_we_use">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">our technologies</h4>
        <h3 class="sr_h3_color_dark_blue">technologies we use</h3>
        <p class="sr_p_desc">
          T-Square, with a strong background in various technologies, we focus on novel and truly distinctive innovation.
        </p>
        <div class="row">
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech1.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech2.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech3.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech4.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech5.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech6.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech7.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech8.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech9.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech10.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech11.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech12.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech13.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech14.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech15.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech16.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech17.png') }}" class="img-responsive">
            </div>
          </div>
          <div class="col-md-2 col-xs-6">
            <div class="img-div" data-aos="zoom-in">
              <img src="{{ asset('home_page/resources/image/service_app/website/technology/tech18.png') }}" class="img-responsive">
            </div>
          </div> 
        </div>
        
      </div>
    </div>
  </div>


  <div class="service_helping_business">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="col-md-4">
          <div class="left-cnt">
            <h4 class="sr_h4_color_red">we work for</h4>
            <h3 class="sr_h3_color_dark_blue">Helping Business in All Website</h3>
            <p class="sr_p_desc_no_pd">
              We are using many open-source available tools. we can develop a website with simple static content, or build complex web applications. so offer following services.
            </p>
          </div>
        </div>
        <div class="col-md-8 col-xs-12">
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon1.png') }}">
                <p>eCommerce Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon2.png') }}">
                <p>Corporate Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon3.png') }}">
                <p>Entertainment Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon4.png') }}">
                <p>Educational Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon5.png') }}">
                <p>IT Technologies Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon6.png') }}">
                <p>Data Collection Survey Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon7.png') }}">
                <p>Nonprofit Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon8.png') }}">
                <p>NGO Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon9.png') }}">
                <p>Personal Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon10.png') }}">
                <p>Web Portal Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon11.png') }}">
                <p>Community Forum Website</p>
              </div>
            </div>
            <div class="col-md-3 col-xs-6">
              <div class="cnt text-center" data-aos="flip-right">
                <img src="{{ asset('home_page/resources/image/service_app/website/business/icon12.png') }}">
                <p>Portfolio Website</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="service_our_process">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-7">
            <div class="cnt">
              <h4 class="sr_h4_color_red">working process</h4>
              <h3 class="sr_h3_color_white">we organize <br> our production process</h3>
              <div class="buttons">
                <a href="#" class="btn btn-default">analysis</a>
                <a href="#" class="btn btn-default">design</a>
                <a href="#" class="btn btn-default">development</a>
                <a href="#" class="btn btn-default">testing</a>
              </div>
              <p class="sr_p_medium">
                Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning website.
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/website/process.png') }}" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection