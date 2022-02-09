@extends('landing.layout.master')

@section('title')
  T-SQUARE LOVE APP
@endsection

@section('content')
	<div class="feature">
	    <div class="love">


	        <div class="header">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="row">
	                        <div class="col-md-7 col-xs-12">
	                            <div class="cnt">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/love.png') }}" class="logo">
	                                <h2 class="fr_h2_font_bold">Love Life & Love It</h2>
	                                <h5 class="fr_h5_font_medium_light">Love Oneself is The Beginning of a Lifelong Romance</h5>

	                                <ul class="list-inline">
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/love/icons/001.png') }}">
	                                        <div class="text-center">Love Calculator</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/love/icons/002.png') }}">
	                                        <div class="text-center">Special Day Reminder</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/love/icons/003.png') }}">
	                                        <div class="text-center">Love Tips</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/love/icons/004.png') }}">
	                                        <div class="text-center">Love Wallpaper</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/love/icons/005.png') }}">
	                                        <div class="text-center">Love Diary</div>
	                                    </li>
	                                </ul>

	                                <p class="download_now">Download Now</p>
	                                <!-- <a class="fr_a_font_light" href="">
	                                    <img src="{{ asset('landing/resources/image/feature_app/play_store.png') }}">
	                                </a> -->
	                                <a class="fr_a_font_light apk_download" href="{{ asset('landing/vendors/apk/love.apk') }}" download="love.apk">
	                                  Download
	                                </a>
	                            </div>
	                        </div>
	                        <div class="col-md-5 hidden-xs">
	                            <img src="{{ asset('landing/resources/image/feature_app/love/mockup.png') }}">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>



	        <div class="mobile_mockup">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <img src="{{ asset('landing/resources/image/feature_app/love/mobile_mockup.png') }}" class="img-responsive">
	                </div>
	            </div>
	        </div>


	        <div class="love_content">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="top-cnt">
	                      <p>Get to Know Your Love Information</p>
	                      <h1>
	                          <span>We're here to</span>
	                          <span class="blod">Help your see better</span>
	                      </h1>
	                    </div>

	                    <ul class="nav nav-tabs nav-pills nav-fill">
	                        <li class="active">
	                            <a data-toggle="tab" href="#tab1">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/small/01.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/love/icons/01.png') }}" class="icon">
	                                <p>Love Calculator</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab2">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/small/02.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/love/icons/02.png') }}" class="icon">
	                                <p>Special Day Reminder</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab3">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/small/03.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/love/icons/03.png') }}" class="icon">
	                                <p>Love Tips</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab4">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/small/04.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/love/icons/04.png') }}" class="icon">
	                                <p>Love Wallpaper</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab5">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/small/05.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/love/icons/05.png') }}" class="icon">
	                                <p>Love Diary</p>
	                            </a>
	                        </li>
	                    </ul>
	                    
	                    <div class="tab-content">
	                        <div id="tab1" class="tab-pane fade in active">
	                          <div class="row">
	                              <div class="col-md-7">
	                                  <div class="cnt">
	                                    <h3>Love Calculator:</h3>
	                                    <p>
	                                      Special Day Reminders is for someone who is waiting for the special date, Special occasion. Never forget anything anymore with special day reminder. It’s very important for reminds you in your special days. Our special day reminders will notify on your special days. You can easily turn off or on notification by notification setting. This service will help you to remind about your special days and your activities according to your setting.  
	                                    </p>
	                                  </div>
	                              </div>
	                              <div class="col-md-5">
	                                  <img src="{{ asset('landing/resources/image/feature_app/love/big/01.png') }}">
	                              </div>
	                          </div>
	                        </div>
	                        <div id="tab2" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Special Day Reminder:</h3>
	                                  <p>
	                                    Timeless Quotes About Love: Life without love is like a tree without blossoms or fruit. The best thing to hold onto in life is each other. 'Tis better to have loved and lost than never to have loved at all. You know you're in love when you can't fall asleep because reality is finally better than your dreams.
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/big/02.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab3" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Love Tips:</h3>
	                                  <p>
	                                    Love wallpapers - collection of beautiful wallpapers with love roses and orchids decorated with hearts. Find the best free stock images about love wallpaper.   
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/big/03.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab4" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Love Wallpaper:</h3>
	                                  <p>
	                                    If you happen to be in a relationship, whether it's a rocky start or long-time solid one, a love diary is one of our favorite ways to maintain a meaningful connection in our fast-paced and easily distracted lives. ... We like a templated journal because it makes starting easy. Second, find the time to journal together.  
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/big/04.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab5" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>Love Diary:</h3>
	                                  <p>
	                                    Using this app user can store their necessary data like special day, memory, event etc.  
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/love/big/05.png') }}">
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