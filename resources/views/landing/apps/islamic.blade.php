  
@extends('landing.layout.master')

@section('title')
  T-SQUARE ISLAMIC APP
@endsection

@section('content')
  <div class="feature">
      <div class="islamic">


          <div class="header">
              <div class="container-fluid">
                  <div class="padding-left-right">
                      <div class="row">
                          <div class="col-md-7 col-xs-12">
                              <div class="cnt">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/logo.png') }}" class="logo">
                                  <h2 class="fr_h2_font_bold">Daily Life of Muslims</h2>
                                  <h5 class="fr_h5_font_medium_light">Daily Prayer on the Go - Listen and Along</h5>

                                  <ul class="list-inline">
                                      <li>
                                          <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/001.png') }}">
                                          <div class="text-center bangla_font">নামাজের সময়সূচী</div>
                                          
                                      </li>
                                      <li>
                                          <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/002.png') }}">
                                          <div class="text-center bangla_font">আল কুরআন</div>
                                      </li>
                                      <li>
                                          <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/003.png') }}">
                                          <div class="text-center bangla_font">হাদিস</div>
                                      </li>
                                      <li>
                                          <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/004.png') }}">
                                          <div class="text-center bangla_font">গুরুত্বপূর্ণ দুয়া</div>
                                      </li>
                                      <li>
                                          <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/005.png') }}">
                                          <div class="text-center bangla_font">কিবলা কম্পাস</div>
                                      </li>
                                  </ul>

                                  <p class="download_now">Download Now</p>
                                  <!-- <a class="fr_a_font_light" href="">
                                      <img src="{{ asset('landing/resources/image/feature_app/play_store.png') }}">
                                  </a> -->
                                  <a class="fr_a_font_light apk_download" id="apk_download" href="{{ asset('landing/vendors/apk/islamic.apk') }}" download="islamic.apk">
                                    Download
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-5 hidden-xs">
                              <img src="{{ asset('landing/resources/image/feature_app/islamic/mockup.png') }}">
                          </div>
                      </div>
                  </div>
              </div>
          </div>



          <div class="mobile_mockup">
              <div class="container-fluid">
                  <div class="padding-left-right">
                      <img src="{{ asset('landing/resources/image/feature_app/islamic/mobile_mockup.png') }}" class="img-responsive">
                  </div>
              </div>
          </div>


          <div class="islamic_content">
              <div class="container-fluid">
                  <div class="padding-left-right">
                      <div class="top-cnt">
                        <p>Get to Know Your Islamic Information</p>
                        <h1>
                            <span>We're here to</span>
                            <span class="blod">Help your Islamic Content</span>
                        </h1>
                      </div>

                      <ul class="nav nav-tabs nav-pills nav-fill">
                          <li class="active">
                              <a data-toggle="tab" href="#tab1">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/small/namaj.png') }}">
                                  <br>
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/01.png') }}" class="icon">
                                  <p class="bangla_font">নামাজের সময়সূচী</p>
                              </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#tab2">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/small/al_quran.png') }}">
                                  <br>
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/02.png') }}" class="icon">
                                  <p class="bangla_font">আল কুরআন</p>
                              </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#tab3">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/small/hadis.png') }}">
                                  <br>
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/03.png') }}" class="icon">
                                  <p class="bangla_font">হাদিস</p>
                              </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#tab4">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/small/importent_dua.png') }}">
                                  <br>
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/04.png') }}" class="icon">
                                  <p class="bangla_font">গুরুত্বপূর্ণ দুয়া</p>
                              </a>
                          </li>
                          <li>
                              <a data-toggle="tab" href="#tab5">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/small/kibla_compass.png') }}">
                                  <br>
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/icons/05.png') }}" class="icon">
                                  <p class="bangla_font">কিবলা কম্পাস</p>
                              </a>
                          </li>
                      </ul>
                      
                      <div class="tab-content">
                          <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="cnt">
                                      <h3 class="bangla_font">নামাজের সময়সূচী:</h3>
                                      <p class="bangla_font">
                                        নামাজ (ফার্সি: نَماز‎‎) বা সালাত হলো ইসলাম ধর্মের প্রধান উপাসনাকর্ম। প্রতিদিন ৫ ওয়াক্ত (নির্দিষ্ট নামাযের নির্দিষ্ট সময়) নামাজ আদায় করা প্রত্যেক মুসলিমের জন্য আবশ্যক বা ফরজ। নামাজ ইসলামের পঞ্চস্তম্ভের একটি। ঈমান বা বিশ্বাসের পর নামাজই ইসলামের সবচেয়ে গুরুত্বপূর্ণ স্তম্ভ। সালাত বা নামাজ ফরজ হওয়ার একটি শর্ত হলো নামাজের সময় হওয়া। প্রতিটি মুমিন মুসলমানের ওপর সময়তো নামাজ আদায় করা ফরজ।আমাদের এই অ্যাপটি ব্যাবহারের মাধ্যমে আপনারা পাচ্ছেন ৫ ওয়াক্ত নামাজের সহি সময়সূচী। 
                                      </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('landing/resources/image/feature_app/islamic/big/01.png') }}">
                                </div>
                            </div>
                          </div>
                          <div id="tab2" class="tab-pane fade">
                            <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3 class="bangla_font">আল কুরআন:</h3>
                                    <p class="bangla_font">
                                      কুরআন বিষয়ে আলোচনা করতে হলে প্রথমেই আমাদের কে জানতে হবে কুরআন কি? কুরআন আসমানি গ্রন্থ। যা হজরত মুহাম্মদ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম-এর উপর সুদীর্ঘ ২৩ বছরে জিবরিল আলাইহিস সালামের মাধ্যমে নাজিল হয়েছিল। আমাদের এই অ্যাপটি ব্যাবহারের মাধ্যমে আপনারা পাচ্ছেন বাংলা তরজমা সহ সহি ভাবে কুরআন পড়তে ও শুনতে পাড়বেন। 
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/big/02.png') }}">
                              </div>
                            </div>
                          </div>
                          <div id="tab3" class="tab-pane fade">
                            <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3 class="bangla_font">হাদিস:</h3>
                                    <p class="bangla_font">
                                      ইসলামি জীবন-দর্শনে কুরআনের সাথে হাদিসের রয়েছে অপরিসীম গুরুত্ব। কুরআন কারীমের অনেক নির্দেশ, রাসূলুল্লাহ (ﷺ)-এর অগণিত নির্দেশ ও সাহাবীগণের কর্ম-পদ্ধতি সন্দেহাতীতভাবে প্রমাণ করে যে, ‘হাদীস’ ইসলামী জীবন-ব্যবস্থার দ্বিতীয় উৎস ও ভিত্তি। আমাদের এই অ্যাপটি ব্যাবহারের মাধ্যমে পাচ্ছেন সহি হাদিসের বিশাল সম্ভার । 
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/big/03.png') }}">
                              </div>
                            </div>
                          </div>
                          <div id="tab4" class="tab-pane fade">
                            <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3 class="bangla_font">গুরুত্বপূর্ণ দুয়া:</h3>
                                    <p class="bangla_font">
                                      কোন দোয়া পড়লে কি হয়, কোন দুয়া কখন পড়তে হয় এমন অসংখ্য দোআর সমাহার রয়েছে অ্যাপটিতে। এই অ্যাপটির মাধ্যমে আপনি দোয়া ও দোয়ার ফজিলত জানতে পারবেন।  
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/big/04.png') }}">
                              </div>
                            </div>
                          </div>
                          <div id="tab5" class="tab-pane fade">
                            <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3 class="bangla_font">কিবলা কম্পাস:</h3>
                                    <p class="bangla_font">
                                      কিবলা দিকনির্দেশ কম্পাস - কিবলা অবস্থান সন্ধানকারী বিশ্বজুড়ে মুসলমানদের কেবলা দিকনির্দেশ খুঁজে পেতে সহায়তা করে।মক্কায় কাবার দিকের দিক (মক্কা) কম্পাসে একটি তীর দিয়ে নির্দেশ করা হয়েছে যাতে আপনি নামায শুরুর আগে আপনার দিকটি সামঞ্জস্য করতে পারেন। 
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('landing/resources/image/feature_app/islamic/big/05.png') }}">
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