@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="app_design">

  <div class="service_header">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h2 class="heading">
          <span class="bold">mobile apps</span>
          <span class="light">design & developemnt</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/3_phn.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">custom mobile app solutions</h3>
            <p>
              We at Smart Sight Innovations offer Smartphone App development solutions to turn a
              client’s business need into an idea for a smartphone app. Several of our robust
              functional solutions speak for themselves in various application stores. 
              From ecommerce, enterprise, games, to utility apps, we have developed multiple 
              user-friendly products that have enhanced business operations of our clients.  
              <br><br>
              With expertise in React Native, Android, iOS and all other cross-platform app solutions, 
              our developers can help in designing, developing and deploying a smartphone application 
              that caters to your business needs. Our transparent approach ensures that our client’s budget, 
              expectations, milestones, and objectives are all weaved together for a perfect app solution.
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
            <h3 class="sr_h3_color_dark_blue">
              get a complete strategy
              <span>of app design & developemnt</span>
            </h3>
            <h4 class="sr_h4_bold">
              hire expart cross platform</br>
              app design & develop to boost your business
            </h4>
            <p>
              Our applications provide a very attractive user interface which is so interactive. 
              The user can experience the application in a very simplified way.  
              <br><br>
              For better customer engagement and attracting the customers to our Cross-Platform applications, 
              we provide amazing animations and an eye-catchy user interface.
              <br><br>  
              The Cross-Platform applications provide very clear navigation icons. 
              Apps also provide multiple map concepts that are useful for the user to know more about the seller.
            </p>

            <div class="list-cnt">
              <h4 class="sr_h4_medium">advantages</h4>  
              <ul>
                <li>Substitution of Traditional Method of Market </li>
                <li>An effective way of Branding and engaging the audience </li>
                <li>Lesser Consumption of Resource and assets</li>
                <li>Fully Native App-like experience</li>
                <li>Custom UI/ UX possible</li>
                <li>Easy to Maintain & 24/7 excellent support facility</li>
                <li>Feasible and Convenient</li>
                <li>Single app for multiple platforms</li>
              </ul>
            </div>

          </div>
          <div class="col-md-6">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/strategy.png') }}" class="img-responsive" data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="service_app_services">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">service</h4>
        <h3 class="sr_h3_color_dark_blue">app services</h3>
        <p class="sr_p_desc">
          We think big and have hands in all leading technology platforms to provide you wide array of services.
        </p>
        <div class="row">

          <div class="col-md-6">
            <div class="tot-cnt" data-aos="fade-down">
              <div class="row">
                <div class="col-md-4">
                  <div class="img">
                    <img src="{{ asset('home_page/resources/image/service_app/app_design/services/01.png') }}" class="img-responsive">
                  </div> 
                </div>
                <div class="col-md-8">
                  <div class="cnt">
                    <h5 class="sr_h4_medium">Android App Development</h5>
                    <p>
                      Native android applications built using Android Studio and Java. Our full stack Android developers ensure your app delivers seamless experience across devices and OS versions
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="tot-cnt" data-aos="fade-down">
              <div class="row">
                <div class="col-md-4">
                  <div class="img">
                    <img src="{{ asset('home_page/resources/image/service_app/app_design/services/02.png') }}" class="img-responsive">
                  </div> 
                </div>
                <div class="col-md-8">
                  <div class="cnt">
                    <h5 class="sr_h4_medium">IOS App Development</h5>
                    <p>
                      Custom iOS apps with capabilities in Objective C, Swift in Xcode and all other major native languages. Once we have built, we will test your iOS app, you can deploy to the App Store.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="tot-cnt" data-aos="fade-down">
              <div class="row">
                <div class="col-md-4">
                  <div class="img">
                    <img src="{{ asset('home_page/resources/image/service_app/app_design/services/03.png') }}" class="img-responsive">
                  </div> 
                </div>
                <div class="col-md-8">
                  <div class="cnt">
                    <h5 class="sr_h4_medium">Custom App Development</h5>
                    <p>
                      We help your unique creative idea for your company custom app. we have expert UI/UX designer who will makes your perfect design and our team help to your branding.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="tot-cnt" data-aos="fade-down">
              <div class="row">
                <div class="col-md-4">
                  <div class="img">
                    <img src="{{ asset('home_page/resources/image/service_app/app_design/services/04.png') }}" class="img-responsive">
                  </div> 
                </div>
                <div class="col-md-8">
                  <div class="cnt">
                    <h5 class="sr_h4_medium">Cross Platform App Development</h5>
                    <p>
                      Best multi-platform app solutions for Android & iOS devices using techno- logies like Cordova PhoneGap,  Xamarin and React Native.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


  <div class="service_app_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h4 class="sr_h4_color_red">process</h4>
        <h3 class="sr_h3_color_dark_blue">our app development process</h3>
        <p class="sr_p_desc">
          Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.
        </p>

        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/process/01.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-8">
            <div class="cnt sr_padding_left">
                <h1 class="sr_h1_big_blue">01</h1>
                <h4 class="sr_h4_bold">Requirement Gathering</h4>
                <p>
                  The first phase of the mobile app development process is defining the strategy for evolving your idea into a successful app. we include a more significant part of this in your overall enterprise mobility strategy & Requirement Gathering. As one app’s objectives may differ from another, there is still an app-specific impact to the  mobility strategy to address during the development process.
                </p>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-8">
            <div class="cnt sr_padding_right">
              <h1 class="sr_h1_big_blue">02</h1>
              <h4 class="sr_h4_bold">Wireframing & UI/UX Designing</h4>
              <p>
                At this stage, we are starts making idea taking shape and turns into an actual project Wireframe. Analysis and planning begin with defining use cases and capturing detailed functional requirements. After we have identified the requirements for app, prepare a product roadmap. Then purpose of an app’s design is to deliver seamless and effortless user experiences with a polished look. Our goal for mobile app UI / UX design is creating excellent user experiences making your app interactive, intuitive, and user-friendly.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/process/02.png') }}" class="img-responsive" data-aos="fade-left">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/process/03.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-8">
            <div class="cnt sr_padding_left">
              <h1 class="sr_h1_big_blue">03</h1>
              <h4 class="sr_h4_bold">App Development</h4>
              <p>
                Planning remains an integral part of this phase in the mobile app development process. Before actual development/programming  efforts start, we will have to define the technical architecture, pick a technology stack, and define the development milestones.  
                <br><br>
                A typical mobile app project is made up of three integral parts: back-end/server technology, API(s) and the mobile app front-end.
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="cnt sr_padding_right">
              <h1 class="sr_h1_big_blue">04</h1>
              <h4 class="sr_h4_bold">Testing & Deployment</h4>
              <p>
                Our best practice approach is involving your QA team in the Analysis and Design stages. The familiarity with app’s functional requirements and objectives will help produce accurate test cases.   
                <br><br>
                Releasing a native mobile app requires submitting to the app stores, Apple App Store for iOS apps and Google Play for Android apps. However, we will need a developer account with Apple App Store and Google Play Store before launching your mobile app. 
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/process/04.png') }}" class="img-responsive" data-aos="fade-left">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('home_page/resources/image/service_app/app_design/process/05.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-8">
            <div class="cnt sr_padding_left">
              <h1 class="sr_h1_big_blue">05</h1>
              <h4 class="sr_h4_bold">Support & Maintenance</h4>
              <p>
                We will provide a complete app development roadmap that any  developer can follow. Keeping your business goals in mind, we will create a technical specification that includes wireframes and describes your app’s complete functionality, technology stack, and business logic. We have team who always satisfaction maintenance your business app and 24/7 excellent support.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>  

  
  <div class="service_share_idea">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h3 class="sr_h3_color_dark_blue">share your idea</h3>
        <div class="row">
          <div class="col-md-6">
            <form action="">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name*">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email*">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone no*">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="project" placeholder="Project details*">
              </div>
              <div class="form-group">
                <input type="file" class="form-control" name="file" placeholder="Maximum File Size: 5MB">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> I consent to the processing of my personal data according to the privacy policy
                </label>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
          <div class="col-md-6">
            <h4 class="sr_h4_medium">what happens next:</h4>
            <ul>
              <li><img src="{{ asset('home_page/resources/image/service_app/app_design/idea/time.png') }}"> Our representative will contact you within 24 hours </li>
              <li><img src="{{ asset('home_page/resources/image/service_app/app_design/idea/requir.png') }}"> We’ll gather all your product requirements. </li>
              <li><img src="{{ asset('home_page/resources/image/service_app/app_design/idea/calc.png') }}"> Our team of business analysts and developers will prepare an estimate. </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
</div>
@endsection