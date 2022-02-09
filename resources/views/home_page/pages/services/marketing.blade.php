@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="marketing">

  <div class="service_header">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h2 class="heading">
          <span class="bold">digital marketing</span>
          <span class="light">and promotion</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/marketing/digital.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">we solve better digital marketing solution</h3>
            <p>
              Our specialized marketing teams work to increase your conversions, repeat traffic, 
              and expand your online visibility. Our team creates successful campaigns that work 
              with your existing branding, or stand alone as innovative  digital marketing concepts.  
              <br><br>
              We help small as well as large clients in the digital transformation from offline to online, 
              from desktop only to mobile also, from single channel to multichannel marketing.
            </p>
            <a class="btn btn-success sr_request_quote" href="{{route('contact-us')}}">request a quote</a>
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
            <h4 class="sr_h4_color_red">discover digital marketing</h4>
            <h3 class="sr_h3_color_dark_blue">digital solutions & strategy</h3>
            <p class="sr_head_desc">
              A top digital solutions & strategy is easy to execute and the reason for high performance in business. 3 Best Digital Strategies Our Company Should Implement Right Now.
            </p>

            
            <h4 class="sr_h4_bold">collaboration and communication tools</h4>
            <p>
              We’ve gathered must-have collaboration and communication among team members, partners, suppliers, and customers is essential. Collaboration suites are crucial to making this happen, as they allow teams to store, edit, manage, and share documents widely. 
            </p>

            <h4 class="sr_h4_bold">remote project management</h4>
            <p>
              The remote working environment, when a manager might not see team members for days at a time and has little idea what they're up to. Projects still need completing though, and remote project management solutions can help keep employees on task and progressing towards business goals. 
            </p> 
              
            <h4 class="sr_h4_bold">custom relationship management solutions</h4>
            <p>
              With a CRM, sales teams, marketing teams, and the accounting department can work together seamlessly to ensure a customer's needs are met—even when they're remote. Since digital CRM solutions' data is hosted on a cloud, it can be accessed from anywhere. 
            </p>   
          </div>
          <div class="col-md-6">
            <div class="img-cnt">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/solution.png') }}" class="img-responsive" data-aos="fade-left">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="service_digital_services">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">services we are provided</h4>
        <h3 class="sr_h3_color_dark_blue">our digital marketing services</h3>
        <p class="sr_p_desc">
          Our digital marketing services, we will help you build a great online presence which is a gateway for your customers wandering online.
        </p>
        <div class="row">

          <div class="col-md-6">
            <div class="digital_services" data-aos="fade-down">
              <div class="row">
                <div class="col-md-8">
                  <div class="cnt">
                    <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/icon1.png') }}" class="icon">
                    <h4 class="sr_h4_medium">Digital Media & PPC Advertising</h4>
                    <p>
                      As a pay-per-click agency that offers the full range of digital marketing services, we have the resources and expertise necessary to incorporate PPC campaigns into your overall marketing strategy effectively. After determining your objectives, we prepare and execute fully-managed PPC campaigns designed to help you meet your goals. 
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/01.png') }}" class="image">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="digital_services" data-aos="fade-down">
              <div class="row">
                <div class="col-md-8">
                  <div class="cnt">
                    <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/icon3.png') }}" class="icon">
                    <h4 class="sr_h4_medium">Search Engine Optimization And Email Marketing</h4>
                    <p>
                      Increase your business’ visibility by engaging with the right audience and using valuable content to guide them to your website. Paid social media advertising allows you to reach outside of your existing customer base to build industry authority. Engaging with customers and prospects in real time helps build rapport and brand trust. 
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/03.png') }}" class="image">
                </div>
              </div>
            </div>
          </div>
        
        </div>
        <div class="row">
  
          
          <div class="col-md-6">
            <div class="digital_services" data-aos="fade-down">
              <div class="row">
                <div class="col-md-8">
                  <div class="cnt">
                    <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/icon2.png') }}" class="icon">
                    <h4 class="sr_h4_medium">Content Marketing Services</h4>
                    <p>
                      Content marketing involves the creation and sharing of brand-relevant online material, such as website pages, blogs, press releases, newsletters, and social media posts. Not all content explicitly promotes a brand, but it is intended to generate interest in its services or products.
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/02.png') }}" class="image">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="digital_services" data-aos="fade-down">
              <div class="row">
                <div class="col-md-8">
                  <div class="cnt">
                    <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/icon4.png') }}" class="icon">
                    <h4 class="sr_h4_medium">Social Media Marketing Service</h4>
                    <p>
                      SEO is short for search engine optimization. It’s the effort to have your website’s pages shown at the top of organic search results. It involves creating website pages in a way that satisfies keywords typed into a search engine, so that users find what they’re looking for on the internet.
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <img src="{{ asset('home_page/resources/image/service_app/marketing/digital/04.png') }}" class="image">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="service_success">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">success</h4>
        <h3 class="sr_h3_color_dark_blue">success in digital marketing</h3>
        <p class="sr_p_desc">
          Our element advanced specialists execute powerful web advertising arrangements in view of your business targets.
        </p>
        <div class="row">
          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon1.png') }}">
              <h4 class="sr_h4_medium">Valuable Customer</h4>
              <p>
                Customer feedback is an important thing that will increase your brand value and also the popularity among the users. Digital  Marketing allows you to interact with people at every stage of the buyer’s journey.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon2.png') }}">
              <h4 class="sr_h4_medium">Target Lead</h4>
              <p>
                We manage all of your local lead generation work and deliver impressive results. This way, you can spend more time doing the things you should be focusing on, like running your business. 
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon3.png') }}">
              <h4 class="sr_h4_medium">Constant Improvement</h4>
              <p>
                To gain a massive success in the business, you must be lenient on doing the updates as per the market flow. You will be able to  measure your content’s effectiveness and avoid pandemonium.
              </p>
            </div>
          </div>
        
        </div>
        <div class="row">

          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon4.png') }}">
              <h4 class="sr_h4_medium">Analyze & Performance</h4>
              <p>
                As a marketer, analyzing digital marketing data is the best way to see whether or not your digital marketing tactics are working and where you can improve.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon5.png') }}">
              <h4 class="sr_h4_medium">Effective Content & Blogging</h4>
              <p>
                If you have embraced digital marketing as a way to reach more of your B2B clients, you know that your website is vitally important to the process. So, how does blogging help your website do its job? Blogging helps in several ways.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt" data-aos="flip-down">
              <img src="{{ asset('home_page/resources/image/service_app/marketing/success/icon6.png') }}">
              <h4 class="sr_h4_medium">Omni-Channel Reach</h4>
              <p>Omnichannel marketing refers to creating your brand’s presence across multiple online (website, app, social media, email, SMS, WhatsApp) and offline channels while ensuring a positive customer journey.</p>
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
              <h3 class="sr_h3_color_white">we organize <br> our digital marketing process</h3>
              <div class="buttons">
                <a href="#" class="btn btn-default">research</a>
                <a href="#" class="btn btn-default">data collection</a>
                <a href="#" class="btn btn-default">targeting</a>
                <a href="#" class="btn btn-default">result</a>
              </div>
              <p class="sr_p_medium">
                When thinking about data collection, it’s important to think about your points at which you are going to collect robust elements of data. And if you do that, you need to think about what ways and methodologies you’re going to use to be able to do that collection.
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