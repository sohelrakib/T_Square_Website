@extends('landing.layout.master')

@section('title')
  T-SQUARE JOKE APP
@endsection

@section('content')
<div class="feature">
    <div class="joke">


        <div class="header">
            <div class="container-fluid">
                <div class="padding-left-right">
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="cnt">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/joke.png') }}" class="logo">
                                <h2 class="fr_h2_font_bold">Moments of Happiness</h2>
                                <h5 class="fr_h5_font_medium_light">All Is Fair in Laughing, Get Ready to Laugh</h5>

                                <ul class="list-inline">
                                    <li>
                                        <img src="{{ asset('landing/resources/image/feature_app/joke/icons/001.png') }}">
                                        <div class="text-center">স্বামী স্ত্রী জোকস</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('landing/resources/image/feature_app/joke/icons/002.png') }}">
                                        <div class="text-center">ছাত্র শিক্ষক জোকস</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('landing/resources/image/feature_app/joke/icons/003.png') }}">
                                        <div class="text-center">অফিস জোকস</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('landing/resources/image/feature_app/joke/icons/004.png') }}">
                                        <div class="text-center">বাঙ্গালী স্ট্যাটাস জোকস</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('landing/resources/image/feature_app/joke/icons/005.png') }}">
                                        <div class="text-center">ডাবল মিন্নিং জোকস</div>
                                    </li>
                                </ul>

                                <p class="download_now">Download Now</p>
                                <!-- <a class="fr_a_font_light" href="">
                                    <img src="{{ asset('landing/resources/image/feature_app/play_store.png') }}">
                                </a> -->
                                <a class="fr_a_font_light apk_download" id="apk_download" href="{{ asset('landing/vendors/apk/joke.apk') }}" download="joke.apk">
                                  Download
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-xs">
                            <img src="{{ asset('landing/resources/image/feature_app/joke/mockup.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mobile_mockup">
            <div class="container-fluid">
                <div class="padding-left-right">
                    <img src="{{ asset('landing/resources/image/feature_app/joke/mobile_mockup.png') }}" class="img-responsive">
                </div>
            </div>
        </div>


        <div class="joke_content">
            <div class="container-fluid">
                <div class="padding-left-right">
                    <div class="top-cnt">
                      <p>Get to Know Your Jokes Information</p>
                      <h1>
                          <span>We're here to</span>
                          <span class="blod">Help your see better</span>
                      </h1>
                    </div>

                    <ul class="nav nav-tabs nav-pills nav-fill">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/small/01.png') }}">
                                <br>
                                <img src="{{ asset('landing/resources/image/feature_app/joke/icons/01.png') }}" class="icon">
                                <p>স্বামী স্ত্রী জোকস</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/small/02.png') }}">
                                <br>
                                <img src="{{ asset('landing/resources/image/feature_app/joke/icons/02.png') }}" class="icon">
                                <p>ছাত্র শিক্ষক জোকস</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/small/03.png') }}">
                                <br>
                                <img src="{{ asset('landing/resources/image/feature_app/joke/icons/03.png') }}" class="icon">
                                <p>অফিস জোকস</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/small/04.png') }}">
                                <br>
                                <img src="{{ asset('landing/resources/image/feature_app/joke/icons/04.png') }}" class="icon">
                                <p>বাঙ্গালী স্ট্যাটাস জোকস</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab5">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/small/05.png') }}">
                                <br>
                                <img src="{{ asset('landing/resources/image/feature_app/joke/icons/05.png') }}" class="icon">
                                <p>ডাবল মিন্নিং জোকস</p>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                          <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3>স্বামী স্ত্রী জোকস:</h3>
                                    <p>
                                      রসিকতা একটি সংক্ষিপ্ত বিবরণ, পর্যবেক্ষণ, বা চিন্তার একটি সেটআপ এবং একটি পাঞ্চলাইন যা একটি শারীরবৃত্তীয় প্রতিক্রিয়া সৃষ্টি করে। হাসি। জোকস একটি বিষয়ে একটি হাস্যকর গ্রহণ উপস্থাপন। তারা বিনোদন একটি ফর্ম। এগুলি কথা বলা যেতে পারে, যেমন একটি স্ট্যান্ড-আপ রুটিনের সময়, বা কমেডি রচনায়, কবিতা এবং এমনকি গানের গানে লেখা।  
                                      <br><br>
                                      স্বামী ও স্ত্রী এর জীবন বৈচিত্রময়, সেই নানা রঙের বৈচিত্র নিয়ে এ দাম্পত্য. এখানে আমরা দাম্পত্য জীবনে স্বামী স্ত্রী এর জোকস কালেকশন শেয়ার করলাম।  
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('landing/resources/image/feature_app/joke/big/01.png') }}">
                              </div>
                          </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>ছাত্র শিক্ষক জোকস:</h3>
                                  <p>
                                    ছাত্রজীবন অমূল্য এবং জীবনের অন্যতম একটি সুখকর সময়। এই ছাত্রজীবন নিয়ে কিছু মজার জোকস রইলো। 
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/big/02.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>অফিস জোকস:</h3>
                                  <p>
                                    বাঙালির জীবনে কর্মক্ষেত্রে হাসি মজার একটা আলাদা এ জায়গা রয়েছে. বস ও কর্মচারীর কথোপকথন অনেক সময় কৌতুক এর বিষয়বস্তু হয়ে দাঁড়ায়।  আজ আমরা এরম এ কিছু তুমুল হাসির বাংলা অফিস জোকস নিয়ে এসেছি যেগুলো আপনাকে খুব হাসাবে।  
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/big/03.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>বাঙ্গালী স্ট্যাটাস জোকস:</h3>
                                  <p>
                                    হাস্তে সবাই ভালোবাসে, ইনফ্যাক্ট সকলকে সবসময় হাসি মজার মধ্যে থাকা উচিত। জীবনটা কে উপভোগ করতে হয় সুন্দর মুহূর্ত ও হাসি মজার মাধ্যমে। সেইজন্যেই ফেইসবুক ও হোয়াটস্যাপ এ শেয়ার করার মতো একদম টাটকা সেরা বাংলা জোকস।
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/big/04.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>ডাবল মিন্নিং জোকস:</h3>
                                  <p>
                                    একদম লেটেস্ট দারুন কিছু বাংলা উড়ঁনষব গবধহরহম জোকস গুলো কালেক্ট করেছি আমরা শুধুমাত্র আপনাদের জন্যে। 
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('landing/resources/image/feature_app/joke/big/05.png') }}">
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

@section('extra_foot_script')
<script type="text/javascript">
  
    console.log('=== app ===');
    function myFunction() {
      document.getElementById("apk_download").click();
    }
    myFunction();
</script>
@endsection