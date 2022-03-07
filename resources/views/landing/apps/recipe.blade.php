@extends('landing.layout.master')

@section('title')
  T-SQUARE RECIPE APP
@endsection

@section('content')
	<div class="feature">
	    <div class="recipe">


	        <div class="header">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="row">
	                        <div class="col-md-7 col-xs-12">
	                            <div class="cnt">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/recipe.png') }}" class="logo">
	                                <h2 class="fr_h2_font_bold">Better Food Better Mood</h2>
	                                <h5 class="fr_h5_font_medium_light">Enjoy The New Tasty, Excellence Testy in Every Bite</h5>

	                                <ul class="list-inline">
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/001.png') }}">
	                                        <div class="text-center bangla_font">বাংলা রেসিপি</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/002.png') }}">
	                                        <div class="text-center bangla_font">ইন্ডিয়ান রেসিপি</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/003.png') }}">
	                                        <div class="text-center bangla_font">চাইনিজ রেসিপি</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/004.png') }}">
	                                        <div class="text-center bangla_font">ডেজার্ট রেসিপি</div>
	                                    </li>
	                                    <li>
	                                        <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/005.png') }}">
	                                        <div class="text-center bangla_font">জুস</div>
	                                    </li>
	                                </ul>

	                                <p class="download_now">Download Now</p>
	                                <!-- <a class="fr_a_font_light" href="">
	                                    <img src="{{ asset('landing/resources/image/feature_app/play_store.png') }}">
	                                </a> -->
	                                <a class="fr_a_font_light apk_download" id="apk_download" href="{{ asset('landing/vendors/apk/recipe.apk') }}" download="recipe.apk">
	                                  Download
	                                </a>
	                            </div>
	                        </div>
	                        <div class="col-md-5 hidden-xs">
	                            <img src="{{ asset('landing/resources/image/feature_app/recipe/mockup.png') }}">
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>



	        <div class="mobile_mockup">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <img src="{{ asset('landing/resources/image/feature_app/recipe/mobile_mockup.png') }}" class="img-responsive">
	                </div>
	            </div>
	        </div>


	        <div class="recipe_content">
	            <div class="container-fluid">
	                <div class="padding-left-right">
	                    <div class="top-cnt">
	                      <p>Get to Know Your Recipe Information</p>
	                      <h1>
	                          <span>We're here to</span>
	                          <span class="blod">Help your better food</span>
	                      </h1>
	                    </div>

	                    <ul class="nav nav-tabs nav-pills nav-fill">
	                        <li class="active">
	                            <a data-toggle="tab" href="#tab1">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/small/01.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/01.png') }}" class="icon">
	                                <p class="bangla_font">বাংলা রেসিপি</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab2">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/small/02.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/02.png') }}" class="icon">
	                                <p class="bangla_font">ইন্ডিয়ান রেসিপি</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab3">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/small/03.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/03.png') }}" class="icon">
	                                <p class="bangla_font">চাইনিজ রেসিপি</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab4">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/small/04.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/04.png') }}" class="icon">
	                                <p class="bangla_font">ডেজার্ট রেসিপি</p>
	                            </a>
	                        </li>
	                        <li>
	                            <a data-toggle="tab" href="#tab5">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/small/05.png') }}">
	                                <br>
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/icons/05.png') }}" class="icon">
	                                <p class="bangla_font">জুস</p>
	                            </a>
	                        </li>
	                    </ul>
	                    
	                    <div class="tab-content">
	                        <div id="tab1" class="tab-pane fade in active">
	                          <div class="row">
	                              <div class="col-md-7">
	                                  <div class="cnt">
	                                    <h3 class="bangla_font">বাংলা রেসিপি:</h3>
	                                    <p class="bangla_font">
	                                      এই অ্যাপ্লিকেশন এর সাহায্যে আপনি নতুন নতুন রান্না শিখতে পারবেন যেমন প্রাতঃরাশ, বিরিয়ানি ,মাছ, ডিম, মুরগী , আচার , মিষ্টিমুখ, উৎসবের রান্না, পূজার রান্না, সস, নিরামিষ তরকারি, বিদেশী খাবার, ডাল, ভাত, পোলাও, বেকারি, রুটি, পরোটা ইত্যাদি।
	                                      <br><br>
	                                      যারা প্রতিদিন রান্নার বিভিন্ন রেসিপি কিংবা বাংলায় রেসিপি খুঁজছেন, তাদের জন্য আমাদের এই প্রচেষ্ঠা। আপনি এখানে পাবেন ভাত, পোলাও, খিচুড়ি, বিরিয়ানি, মাছ, মাংস, সবজি, দেশি ও বিদেশী বিভিন্ন রান্নার সহজ রেসিপি। বাংলায় রান্নার রেসিপির এই অ্যাপ্লিকেশন-এ আরো যা থাকছে: মাংসের স্পেশাল রেসিপি, একদম ঘরোয়া পদ্ধতিতে অন্যান্য বিভিন্ন রান্নার সহজ সুন্দর রেসিপি।
	                                    </p>
	                                  </div>
	                              </div>
	                              <div class="col-md-5">
	                                  <img src="{{ asset('landing/resources/image/feature_app/recipe/big/01.png') }}">
	                              </div>
	                          </div>
	                        </div>
	                        <div id="tab2" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3 class="bangla_font">ইন্ডিয়ান রেসিপি:</h3>
	                                  <p class="bangla_font">
	                                    আমরা সকলেই কম বেশী নতুন নতুন রান্না করতে/শিখতে পছন্দ করি, ইন্ডিয়ান বিভিন্ন রেসিপি নিয়ে আমাদের এই ক্যাটাগরি টা সাজানো । আপনারা ঘরে বসেই খুব সহজেই এই অ্যাপটির মাধ্যমে নানান ধরনের পছন্দের ইন্ডিয়ান খাবার তৈরি করতে পারেন। 
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/big/02.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab3" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3 class="bangla_font">চাইনিজ রেসিপি:</h3>
	                                  <p class="bangla_font">
	                                    ঘরে বসে চাইনিজ রেসিপি, এই অ্যাপ্লিকেশন আপনাকে চাইনিজ সবজি রেসিপি থেকে শুরু করে সকল প্রকার চাইনিজ রেসিপি বাংলায় শেখাতে সাহায্য করবে। হোটেল কিংবা রেস্তোরাঁয় নয় এখন থেকে নিজ হাতে ঘরে বসেই তৈরি করুন সুস্বাদু চাইনিজ রেসিপি। বর্তমানে সুস্বাদু বাংলা খাবার রেসিপির পাশাপাশি চাইনিজ রেসিপি আমাদের জনপ্রিয় একটি খাবার হয়ে উঠেছে। 
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/big/03.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab4" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3 class="bangla_font">ডেজার্ট রেসিপি:</h3>
	                                  <p class="bangla_font">
	                                    ডেজার্ট পছন্দ করে না এমন লোক নেই বললেই চলে। তাই আপনাদের জন্য এই অ্যাপটিতে  নিয়ে এসেছি ২০০+ ডেজার্ট রেসেপি । অনেক লোকই আছে যারা কিনা বাজার নানান ধরনের ডেজার্ট কিনে নিয়ে আসেন। আপনারা ঘরে বসেই এই অ্যাপটির মাধ্যমে নানান ধরনের ডেজার্ট তৈরি করতে পারেন। 
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/big/04.png') }}">
	                            </div>
	                          </div>
	                        </div>
	                        <div id="tab5" class="tab-pane fade">
	                          <div class="row">
	                            <div class="col-md-7">
	                                <div class="cnt">
	                                  <h3>জুস:</h3>
	                                  <p class="bangla_font">
	                                    গরমে অনেক সময় আমাদের গলা শুকিয়ে কাঠ হয়ে যায়। গরমের তৃষ্ণা থেকে আপনাকে রেহায় দিতে পারে এক গ্লাস ঠান্ডা শরবত । বাংলা রেসিপি থেকে বাছাই করে সেরা সব শরবত রেসিপি নিয়ে আমাদের এই অ্যাপটিকে সাজানো হয়েছে ।
	                                  </p>
	                                </div>
	                            </div>
	                            <div class="col-md-5">
	                                <img src="{{ asset('landing/resources/image/feature_app/recipe/big/05.png') }}">
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