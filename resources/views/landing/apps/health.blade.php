@extends('landing.layout.master')

@section('title')
  T-SQUARE HEALTH APP
@endsection

@section('content')
	<div class="feature">
	    <div class="health">


	        <div class="header">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="row">
	                        <div class="col-md-7 col-xs-12">
	                            <div class="cnt">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/health.png') }}" class="logo">
	                                <h2 class="fr_h2_font_bold">Good Health Good Life</h2>
	                                <h5 class="fr_h5_font_medium_light">Physical Fitness is The First Requisite of Happiness</h5>

	                                <ul class="list-inline">
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/health/icons/001.png') }}">
	                                        <div class="text-center">General Health Tips</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/health/icons/002.png') }}">
	                                        <div class="text-center">Important Number</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/health/icons/003.png') }}">
	                                        <div class="text-center">Step Count</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/health/icons/004.png') }}">
	                                        <div class="text-center">Medicine Reminder</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/health/icons/005.png') }}">
	                                        <div class="text-center">Healthy Foods</div>
	                                    </li>
	                                </ul>

	                                <p class="download_now">Download Now</p>
	                                <!-- <a class="fr_a_font_light" href="">
	                                    <img src="{{ asset('landing/resources/image/feature_app/play_store.png') }}">
	                                </a> -->
	                                <a class="fr_a_font_light apk_download" href="{{ asset('landing/vendors/apk/health.apk') }}" download="health.apk">
	                                  Download
	                                </a>
	                            </div>
	                        </div>
	                        <div class="col-md-5 hidden-xs">
	                            <img src="{{ asset('landing/resources/image/feature_app/health/mockup.png') }}">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>



	        <div class="mobile_mockup">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <img src="{{ asset('landing/resources/image/feature_app/health/mobile_mockup.png') }}" class="img-responsive">
	                </div>
	            </div>
	        </div>


	        <div class="beauty_content">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="top-cnt">
	                      <p>Get to Know Your Health Information</p>
	                      <h1>
	                          <span>We're here to</span>
	                          <span class="blod">Help your see better</span>
	                      </h1>
	                    </div>

	                    <ul class="nav nav-tabs nav-pills nav-fill">
	                        <li class="active">
	                            <a data-toggle="tab" href="#tab1">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/small/01.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/health/icons/01.png') }}" class="icon">
	                                <p>General Health Tips</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab2">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/small/02.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/health/icons/02.png') }}" class="icon">
	                                <p>Important Number</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab3">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/small/03.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/health/icons/03.png') }}" class="icon">
	                                <p>Step Count</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab4">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/small/04.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/health/icons/04.png') }}" class="icon">
	                                <p>Medicine Reminder</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab5">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/small/05.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/health/icons/05.png') }}" class="icon">
	                                <p>Healthy Foods</p>
	                            </a>
	                        </li>
	                    </ul>
	                    
	                    <div class="tab-content">
	                        <div id="tab1" class="tab-pane fade in active">
	                          <div class="row">
	                              <div class="col-md-7">
	                                  <div class="cnt">
	                                    <h3>General Health Tips:</h3>
	                                    <p>
	                                      Emergencies do not come with a warning. In such hospital, ambulance or blood bank may not be around to help out. The App user will be able to find the emergency number through use this app.  
	                                    </p>
	                                  </div>
	                              </div>
	                              <div class="col-md-5">
	                                  <img src="{{ asset('landing/resources/image/feature_app/health/big/01.png') }}">
	                              </div>
	                          </div>
	                        </div>
	                        <div id="tab2" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Important Number:</h3>
	                                  <p>
	                                    The most accurate & simple step tracker auto tracks your daily steps, burned calories, walking distance, duration, pace, health data, etc., and display them in intuitive graphs for easy checking.  
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/big/02.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab3" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Step Count:</h3>
	                                  <p>
	                                    Walking is one of the most popular ways to get more physical activity as an adult. It’s free, easy to get started, and you can fit it into your day any time you want.
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/big/03.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab4" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Medicine Reminder:</h3>
	                                  <p>
	                                    Medicine Reminder is an easy-to-use and reliable feature that helps you remember to take your medications at the right time. It allows you to create any type of recurring reminders (every X hours, specific times, daily, weekly, monthly, every X days, etc). 
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/big/04.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab5" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Healthy Foods:</h3>
	                                  <p>
	                                    The App user will be able to find out how much carbohydrate, protein and fat you should be eating and when. Choose wisely for a healthy diet that keeps you full around the clock. 
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/health/big/05.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>

	    </div>
	</div>
@endsection