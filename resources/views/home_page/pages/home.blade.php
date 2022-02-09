@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="carousel" id="home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
      
            <div class="item active">
              <img src="{{ asset('home_page/resources/image/slider/bg1.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="carousel-text-cnt">
                      <h1 class="head-primary">
                        <span class="head-primary-main">mobile apps</span>
                        <span class="head-primary-sub">design & development</span>
                      </h1>
  
                      <h1 class="head-secondary">
                        <span class="head-secondary-main">explore apps business</span>
                        <span class="head-secondary-sub">love oneself is the beginning of a lifelong style</span>
                      </h1>
  
                      <!-- <div class="playstore">
                        <a href="#"><img src="{{ asset('home_page/resources/image/slider/playstore.png') }}"> T-Square/Playstore</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="{{ asset('home_page/resources/image/slider/mockup1.png') }}" class="mockup">
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('home_page/resources/image/slider/bg2.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="carousel-text-cnt">
                      <h1 class="head-primary">
                        <span class="head-primary-main">website</span>
                        <span class="head-primary-sub">design & development</span>
                      </h1>
  
                      <h1 class="head-secondary">
                        <span class="head-secondary-main">empowering business</span>
                        <span class="head-secondary-sub">impressing web marketing solutions</span>
                      </h1>
  
                      <!-- <div class="playstore">
                        <a href="#"><img src="{{ asset('home_page/resources/image/slider/playstore.png') }}"> T-Square/Playstore</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="{{ asset('home_page/resources/image/slider/mockup2.png') }}" class="mockup">
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('home_page/resources/image/slider/bg3.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="carousel-text-cnt">
                      <h1 class="head-primary">
                        <span class="head-primary-main">software</span>
                        <span class="head-primary-sub">development</span>
                      </h1>
  
                      <h1 class="head-secondary">
                        <span class="head-secondary-main">technology made simple</span>
                        <span class="head-secondary-sub">buidling the network for the smartest people</span>
                      </h1>
  
                      <!-- <div class="playstore">
                        <a href="#"><img src="{{ asset('home_page/resources/image/slider/playstore.png') }}"> T-Square/Playstore</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="{{ asset('home_page/resources/image/slider/mockup3.png') }}" class="mockup">
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('home_page/resources/image/slider/bg4.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="carousel-text-cnt">
                      <h1 class="head-primary">
                        <span class="head-primary-main">platform</span>
                        <span class="head-primary-sub">managed service</span>
                      </h1>
  
                      <h1 class="head-secondary">
                        <span class="head-secondary-main">empowering humanity</span>
                        <span class="head-secondary-sub">the intelligence and judgement of big data is always right</span>
                      </h1>
  
                      <!-- <div class="playstore">
                        <a href="#"><img src="{{ asset('home_page/resources/image/slider/playstore.png') }}"> T-Square/Playstore</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="{{ asset('home_page/resources/image/slider/mockup4.png') }}" class="mockup">
                  </div>
                </div>
              </div>
            </div>

            <div class="item">
              <img src="{{ asset('home_page/resources/image/slider/bg5.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-md-6 col-xs-12">
                    <div class="carousel-text-cnt">
                      <h1 class="head-primary">
                        <span class="head-primary-main">digital marketing</span>
                        <span class="head-primary-sub">and promotion</span>
                      </h1>
  
                      <h1 class="head-secondary">
                        <span class="head-secondary-main">connected creativity</span>
                        <span class="head-secondary-sub">creative solution to improve your business</span>
                      </h1>
  
                      <!-- <div class="playstore">
                        <a href="#"><img src="{{ asset('home_page/resources/image/slider/playstore.png') }}"> T-Square/Playstore</a>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-md-6 hidden-xs">
                    <img src="{{ asset('home_page/resources/image/slider/mockup5.png') }}" class="mockup">
                  </div>
                </div>
              </div>
            </div>
            
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="service" id="our_services">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h2 class="text-center h2-font-weight">our services</h2>
      <div class="row">

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">apps</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">design & development</h4>
              <img src="{{ asset('home_page/resources/image/service/icon1.png') }}" class="icon-img" alt="icon">
              <p>
                We make quality cleaned and Android applications for new companies and startups.  We likewise know some things about branding sites, and client securing.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">website</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">design & development</h4>
              <img src="{{ asset('home_page/resources/image/service/icon2.png') }}" class="icon-img" alt="icon">
              <p>
                We research which search keywords will yield the best conversions & filter data into a comprehensive execution plan to develop website that is perfectly tailored to your business.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">software</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">development</h4>
              <img src="{{ asset('home_page/resources/image/service/icon3.png') }}" class="icon-img" alt="icon">
              <p>Software engineering is important because specific software is needed in almost every industry, in every business, and for every function.</p>
            </div>
          </div>
        </div>
      
      </div>
      <div class="row">

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">platform</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">managed services</h4>
              <img src="{{ asset('home_page/resources/image/service/icon4.png') }}" class="icon-img" alt="icon">
              <p>Our Platform Managed Services provide an alternative approach, leveraging our skills base across multiple clients for a more efficient outcome.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">digital marketing</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">and promotion</h4>
              <img src="{{ asset('home_page/resources/image/service/icon5.png') }}" class="icon-img" alt="icon">
              <p>We provide innovative solutions on Digital marketing. Digital marketing campaign is an online strategy with the goal of promoting a business product.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-12">
          <div class="service-cnt">
            <h4 class="h4-font-weight">strategy</h4>
            <div class="content" data-aos="fade-up">
              <h4 class="h4-font-weight-light">and consultant</h4>
              <img src="{{ asset('home_page/resources/image/service/icon6.png') }}" class="icon-img" alt="icon">
              <p>We offer creative solutions that have helped thousands of companies across all geographies and sectors develop and execute winning strategies.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="skill">
  <div class="container-fluid">
    <div class="padding-left-right">
      <div class="row">

        <div class="col-md-6">
          <h1 class="h2-font-weight-medium moto" data-aos="zoom-in-right">
            <span class="bold">dream bigger</span>
            <span class="light">do bigger</span>
          </h1>
        </div>

        <div class="col-md-6">
          <h4 class="h3-font-weight-light"><span class="font-bold">our</span> skills</h4>
          <p>T-Square welcomes the people belongs to the background of Information technology, Computer science, Business studies from a wide area of an open job market. T-Square Software Solution have POS, HRM, Pharmacy management, Hospital management, Accounts Management Software and work with custom software, Website developmet and Android apps development. </p>
          <table>
            <tr data-aos="fade-left">
              <td>Web Development: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 97</td>
            </tr>

            <tr data-aos="fade-left">
              <td>Custom Software: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 90</td>
            </tr>

            <tr data-aos="fade-left">
              <td>Mobile Application: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 100</td>
            </tr>

            <tr data-aos="fade-left">
              <td>E-Commerce Solution: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 100</td>
            </tr>

            <tr data-aos="fade-left">
              <td>SMS Marketing: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 100</td>
            </tr>

            <tr data-aos="fade-left">
              <td>VAS Solution: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 100</td>
            </tr>

            <tr data-aos="fade-left">
              <td>Content Development: &nbsp;</td>
              <td>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td class="text-right">&nbsp; 95</td>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="featured" id="featured_apps">
  <div class="carousel">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div id="myCarousel_featured" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel_featured" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel_featured" data-slide-to="1"></li>
              <li data-target="#myCarousel_featured" data-slide-to="2"></li>
              <li data-target="#myCarousel_featured" data-slide-to="3"></li>
              <li data-target="#myCarousel_featured" data-slide-to="4"></li>
              <li data-target="#myCarousel_featured" data-slide-to="5"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
        
              <div class="item active">
                <img src="{{ asset('home_page/resources/image/featured/bg1.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img1.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon1.png') }}"> islam
                        </div>
                        <p>Prayer Times Bangladesh gives you the actual prayer time of all places of Bangladesh. This app will let you know about all prayer times of Bangladesh. You can set alarm for any wakt of your prayer. The App user will be able to recite & listen Quran Tilawat with Bangla tarjama through use the App.  Dua is the one of highest forms of worship. There is nothing more beloved to Allah than the supplication of his slave. The app has a simple, clean and elegant design with many useful features such as audio recitation with Bangla tarjama. Qibla Compass that helps Muslim mobile users throughout the world in finding the exact direction of Qibla.</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <div class="item">
                <img src="{{ asset('home_page/resources/image/featured/bg2.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img2.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon2.png') }}"> health care
                        </div>
                        <p>In such hospital, ambulance or blood bank may not be around to help out. The App user will be able to find the emergency number through use this app. The most accurate & simple step tracker auto tracks your daily steps, burned calories, walking distance, duration, pace, health data, etc., and display them in intuitive graphs for easy checking. Medicine Reminder is an easy-to-use and reliable feature that helps you remember to take your medications at the right time. It allows you to create any type of recurring reminders (every X hours, specific times, daily, weekly, monthly, every X days, etc).</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <img src="{{ asset('home_page/resources/image/featured/bg3.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img3.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon3.png') }}"> beauty tips
                        </div>
                        <p>A long-wear cream shadow and a long-wear gel eyeliner blended together is a quick and simple way to create a smokey eye with minimal products. Simply apply the shadow all over the lid, blending it over and over towards the outer corner for the smokey effect. Then apply the gel eyeliner along the bottom lid and lash line, smudging it with a small eye brush.</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <img src="{{ asset('home_page/resources/image/featured/bg4.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img4.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon4.png') }}"> priyo
                        </div>
                        <p>Special Day Reminders is for someone who is waiting for the special date, Special occasion. Never forget anything anymore with special day reminder. It’s very important for reminds you in your special days. Our special day reminders will notify on your special days. You can easily turn off or on notification by notification setting. This service will help you to remind about your special days and your activities.</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <img src="{{ asset('home_page/resources/image/featured/bg5.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img5.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon5.png') }}"> best recipes
                        </div>
                        <p>With this app you can learn new recipes like breakfast, biryani, fish, eggs, chicken, pickles, sweets, festive cooking, puja cooking, sauce, vegetarian curry, foreign food, pulses, rice, polao, bakery, bread, parota Etc.  This is our endeavor for those who are looking for different recipes for cooking or recipes in Bengali every day. Here you will find easy recipes for rice, polao, khichuri, biryani, fish, meat, vegetables, local and foreign cuisine. There is more in this application of Bengali cooking recipes: special meat recipes, simple and beautiful recipes for various other home cooking recipes.</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <img src="{{ asset('home_page/resources/image/featured/bg6.png') }}" class="slider-bg-img" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-md-6 hidden-xs">
                      <img src="{{ asset('home_page/resources/image/featured/feature-img6.png') }}" class="mockup">
                    </div>
  
                    <div class="col-md-6 col-xs-12">
                      <div class="featured-text-cnt">
                        <h2 class="h2-font-weight">featured app</h2>
                        <div class="img_and_text">
                          <img src="{{ asset('home_page/resources/image/featured/icon6.png') }}"> jokes
                        </div>
                        <p>A joke is a brief story, observation, or thought that has a setup and a punch line that triggers a physiological response—laughter. Jokes present a humorous take on a subject. They are a form of entertainment. They can be spoken, like during a stand-up routine, or written down in comedy writing, poetry, and even song lyrics.</p>
                        <!-- <h4 class="h4-font-medium">available on</h4>
                        <div class="feature-link">
                          <a href="#"><img src="{{ asset('home_page/resources/image/featured/play-store.png') }}"></a>
                        </div> -->
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel_featured" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel_featured" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="expertise">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h2 class="text-center h2-font-weight">our expertise</h2>
      <div class="text-box">
        <p class="p-font-light">
          Discuss your project requirements software development experts and they will provide you with a personalized solution. 
        </p>
      </div>
      <div class="row">

        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon1.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">apps design and development</h5>
            <p data-aos="zoom-in">
              An experienced mobile app design and development team will want to learn about your business and your users.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon2.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">web and enterprise portals</h5>
            <p data-aos="zoom-in">
              We helps deliver operational services to users and operators for end-to-end insights across the entire business.   
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon3.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">software development</h5>
            <p data-aos="zoom-in">
              Our highly-experienced development team is always looking for interesting new projects.  Our expert developers and consultants help create value quickly.  
            </p>
          </div>
        </div>

      </div>
      <div class="row">

        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon4.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">content management</h5>
            <p data-aos="zoom-in">
              Content management (CM) is the process of planning, developing, managing, deploying, preserving and evaluating all content within an enterprise.   
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon5.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">outreach and data analysis</h5>
            <p data-aos="zoom-in">
              At Outreach you'll experience a passionate, driven team with endless growth opportunities. At Outreach, we help our customers change the world.   
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center content">
            <img src="{{ asset('home_page/resources/image/expertise/icon6.png') }}" class="icon-img" alt="icon">
            <h5 class="h5-font-weight" data-aos="zoom-in">business process automation</h5>
            <p data-aos="zoom-in">
              Business process automation is the use of technology to execute recurring tasks or processes in a business where manual effort can be replaced.   
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="who_we_are">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h2 class="text-center h2-font-weight">who we are</h2>
      <div class="text-box">
        <p class="p-font-light">
          T-Square is a client Oriented Custom software development company Provide Strategic Solutions for Building ROI Driven Software Development, Web & Mobile Application Development Services within your budget.   
        </p>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="content-right">

            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-10 col-xs-12" data-aos="fade-left">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon1.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">exclusive design</h5>
                  <p>
                    With a unique amalgamation of skilled developers and cutting-edge technologies, we enable transparency and scalability for designing exclusive service lines for our customers. 
                  </p>
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon1.png') }}" class="img-responsive hidden-xs">
                </div>
              </div>
            </div>
  
            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-10 col-xs-12" data-aos="fade-left">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon2.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">project management</h5>
                  <p>
                    To ensure quality and sustainability of the solutions developed, our teams use a continuous integration for managing the projects. 
                  </p>
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon2.png') }}" class="img-responsive hidden-xs">
                </div>
              </div>
            </div>
  
            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-10 col-xs-12" data-aos="fade-left">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon3.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">fully secured</h5>
                  <p>
                    We complete every software design process with a high-end focus on security. We also answer your specific needs for special secured software development. 
                  </p>
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon3.png') }}" class="img-responsive hidden-xs">
                </div>
              </div>
            </div>

          </div>          
        </div>
        <div class="col-md-4 col-xs-12 hidden-xs">
          <img src="{{ asset('home_page/resources/image/who_we_are/mockup.png') }}" class="img-responsive mobile-mockup">
        </div>
        <div class="col-md-4">
          <div class="content-left">

            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon4.png') }}" class="img-responsive hidden-xs">
                </div>
                <div class="col-md-10 col-xs-12" data-aos="fade-right">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon4.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">high quality products</h5>
                  <p>
                    Be it for a web platform or a mobile application, our experts will always find a solution adapted to your needs and budget with cutting edge technology.   
                  </p>
                </div>
              </div>
            </div>
  
            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon5.png') }}" class="img-responsive hidden-xs">
                </div>
                <div class="col-md-10 col-xs-12" data-aos="fade-right">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon5.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">data analytics</h5>
                  <p>
                    We follow a systematical apply of statistical or logical techniques to describe and illustrate, abbreviate and summarize, and evaluate data.  
                  </p>
                </div>
              </div>
            </div>
  
            <div class="who_we_are-cnt">
              <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon6.png') }}" class="img-responsive hidden-xs">
                </div>
                <div class="col-md-10 col-xs-12" data-aos="fade-right">
                  <img src="{{ asset('home_page/resources/image/who_we_are/icon6.png') }}" class="visible-xs">
                  <h5 class="h5-font-weight-camel">excellent support</h5>
                  <p>
                    Our company firmly believes in excellent rapport building with its customers. We choose to put the customer’s priority first.   
                  </p>
                </div>
              </div>
            </div>

          </div>    
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="stat" data-aos="zoom-in-down">
            <h1 class="h1-font-weight"><span class="ts-count">07</span></h1>
            <h3 class="h2-font-weight-light">apps</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stat" data-aos="zoom-in-down">
            <h1 class="h1-font-weight"><span class="ts-count">20</span>k</h1>
            <h3 class="h2-font-weight-light">users</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stat" data-aos="zoom-in-down">
            <h1 class="h1-font-weight"><span class="ts-count">70</span>k</h1>
            <h3 class="h2-font-weight-light">download</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="stat" data-aos="zoom-in-down">
            <h1 class="h1-font-weight"><span class="ts-count">8</span> top</h1>
            <h3 class="h2-font-weight-light">charted</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection