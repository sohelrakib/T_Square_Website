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
          <span class="bold">software</span>
          <span class="light">development</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/software/custom.png') }}" class="img-responsive" data-aos="zoom-out-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">custom software development</h3>
            <p>
              Our software teams help our customers build customized software - 
              everything from web to desktop to enterprise to mobile and beyond.   
              <br><br>
              We hire only the best. 
              Our culture helps us retain our talents and our skill development 
              programs ensure that we are always on the top of recent developments. 
              Whether they are in, mobile application development or building web apps 
              or custom desktop tools, our clients get top professionals working for them
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
            <h4 class="sr_h4_color_red">discover software solution</h4>
            <h3 class="sr_h3_color_dark_blue">software business solutions</h3>
            <p class="sr_head_desc">
              Full-cycle software development services designed to help your business grow. Whether it’s custom software engineering, software testing and quality assurance, system integration, technology consulting, or software support.
            </p>
            <h4 class="sr_h4_bold">discover and business analysis</h4>
            <p>
              T-Square is a custom application development company with over a decade of experience in building world-class B2B and B2C solutions focusing on video delivery, RTC, adtech, eLearning, and data analytics. 
            </p>

            <h4 class="sr_h4_bold">remote project management</h4>
            <p>
              The remote working environment, when a manager might not see team members for days at a time and has little idea what they're up to. Projects still need completing though, and remote project management solutions can help keep employees on task and progressing towards business goals.
            </p> 
              
            <h4 class="sr_h4_bold">risk management and mitigation</h4>
            <p>
              We identify, document and assess all project risks and their impact. The team prepares a fully transparent Risk Register that includes our best practices for risk mitigation and prevention, and continuously updates it throughout the project. Contingency activities are planned beforehand and triggered when a potential risk incident arises.
            </p>   
          </div>
          <div class="col-md-6">
            <div class="img-cnt">
              <img src="{{ asset('home_page/resources/image/service_app/software/soluation.png') }}" class="img-responsive" data-aos="zoom-out-left">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="service_we_provide">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">services we are provided</h4>
        <h3 class="sr_h3_color_dark_blue">our best services we provide!</h3>
        <p class="sr_p_desc">
          our custom software development services to unlock business value. We are ready for challenges of any scale and complexity.
        </p>

        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon1.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">Custom CRM Solution</h4>
                  <p>
                    A better way to manage your sales, projects, team, clients & marketing - on a single platform. Powerful, affordable & easy to use software for your business.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon2.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">ERP Software Development</h4>
                  <p>
                    This solution offers reporting, mobile ERP, and workflow for your entire organization, covering finance, management, purchasing, service, sales, accounting, warehousing, and production.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon3.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">E-commerce Solution</h4>
                  <p>
                    We build next-gen, feature-rich and scalable eCommerce solutions to help you effectively reach your customers and improve your bottom line.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon4.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">Inventory Management</h4>
                  <p>Inventory management system uses in small size business like pharmacy, store, fisharies and general inventory. Its web based platform software you can easily maintain your inventory.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon5.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">Telco APIs</h4>
                  <p>A regional office of a leading Bangladeshi telco made a strategic decision to redesign their web-based VoD service. Many of the platform’s features needed improvement.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="cnt" data-aos="zoom-out-up">
              <div class="row">
                <div class="col-md-2 col-xs-12">
                  <img src="{{ asset('home_page/resources/image/service_app/software/we_provide/icon6.png') }}" class="img-responsive">
                </div>
                <div class="col-md-10 col-xs-12">
                  <h4 class="sr_h4_medium">HR Management Systems</h4>
                  <p>Simple, intuitive HR software focusing on people, not paper. Improve how your company tracks vacation, holidays, sick leave, conferences, or any other time away from daily work.</p>
                </div>
              </div>
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
        <p class="sr_p_desc">T-Square, with a strong background in various technologies, we focus on novel and truly distinctive innovation.</p>
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



  <div class="service_life_cycle">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">life cycle</h4>
        <h3 class="sr_h3_color_dark_blue">our best services we provide!</h3>
        <p class="sr_p_desc">
          The Software Development Life Cycle (SDLC) refers to a methodology with clearly defined processes for creating high-quality software.
        </p>

        <div class="row">
          <div class="col-md-3">
            <div class="cnt" data-aos="fade-right">
              <h4 class="sr_h4_medium">requirement analysis</h4>
              <p>
                Detailed analysis of the software is performed to identify overall requirements of client. This step is necessary to make adjustments and to ensure that software functions properly at the end.
              </p>
            </div>

            <div class="cnt" data-aos="fade-right">
              <h4 class="sr_h4_medium">software design</h4>
              <p>
                Once the analysis is complete, the step of designing takes over, which is basically building the architecture of the project. This step helps remove possible flaws by setting a standard and attempting to stick to it.
              </p>
            </div>

            <div class="cnt" data-aos="fade-right">
              <h4 class="sr_h4_medium">development testing</h4>
              <p>
                The testing stage assesses the software for errors and documents bugs if there are any.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <img src="{{ asset('home_page/resources/image/service_app/software/cycle.png') }}" class="img-responsive">
          </div>
          <div class="col-md-3">
            <div class="cnt" data-aos="fade-left">
              <h4 class="sr_h4_medium">products planning</h4>
              <p>
                This stage is crucial for running the developed software assessed by all the stakeholders. This is to ensure the complete level of customer satisfaction.
              </p>
            </div>

            <div class="cnt" data-aos="fade-left">
              <h4 class="sr_h4_medium">development</h4>
              <p>
                Expert software developers start the actual software development process. The required components and functionalities of software are created in this very stage.
              </p>
            </div>

            <div class="cnt" data-aos="fade-left">
              <h4 class="sr_h4_medium">maintenance</h4>
              <p>
                Once the software passes through all the stages without any issues, a maintenance process is followed wherein it will be maintained and upgraded from time to time to adapt to changes. 
              </p>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>  

  
  
</div>
@endsection