@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="feature">
    <div class="beauty">


        <div class="header">
            <div class="container-fluid">
                <div class="padding-left-right">
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="cnt">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/beauty.png') }}" class="logo">
                                <h2 class="fr_h2_font_bold">Define Beauty, Define You</h2>
                                <h5 class="fr_h5_font_medium_light">Homemade Beauty Tips, Skin Care, Makeup Tips & Hair Care</h5>

                                <ul class="list-inline">
                                    <li>
                                        <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/001.png') }}">
                                        <div class="text-center">Eyes</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/002.png') }}">
                                        <div class="text-center">Face</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/003.png') }}">
                                        <div class="text-center">Hair</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/004.png') }}">
                                        <div class="text-center">Skin</div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/005.png') }}">
                                        <div class="text-center">Arms & Feet</div>
                                    </li>
                                </ul>

                                <p class="download_now">Download Now</p>
                                <a class="fr_a_font_light" href="">
                                    <img src="{{ asset('home_page/resources/image/feature_app/play_store.png') }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 hidden-xs">
                            <img src="{{ asset('home_page/resources/image/feature_app/beauty/mockup.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mobile_mockup">
            <div class="container-fluid">
                <div class="padding-left-right">
                    <img src="{{ asset('home_page/resources/image/feature_app/beauty/mobile_mockup.png') }}" class="img-responsive" data-aos="zoom-in">
                </div>
            </div>
        </div>


        <div class="beauty_content">
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
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/small/01.png') }}">
                                <br>
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/01.png') }}" class="icon">
                                <p>Eyes</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/small/02.png') }}">
                                <br>
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/02.png') }}" class="icon">
                                <p>Face</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/small/03.png') }}">
                                <br>
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/03.png') }}" class="icon">
                                <p>Hair</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/small/04.png') }}">
                                <br>
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/04.png') }}" class="icon">
                                <p>Skin</p>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab5">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/small/05.png') }}">
                                <br>
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/icons/05.png') }}" class="icon">
                                <p>Arms & Feet</p>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                          <div class="row">
                              <div class="col-md-7">
                                  <div class="cnt">
                                    <h3>Eyes Beauty Tips:</h3>
                                    <p>
                                      A long-wear cream shadow and a long-wear gel eyeliner blended together is a quick and simple way to create a smokey eye with minimal products.
                                      <br><br>
                                      Simply apply the shadow all over the lid, blending it over and over towards the outer corner for the smokey effect. Then apply the gel eyeliner along the bottom lid and lash line, smudging it with a small eye brush. 
                                    </p>
                                  </div>
                              </div>
                              <div class="col-md-5">
                                  <img src="{{ asset('home_page/resources/image/feature_app/beauty/big/01.png') }}">
                              </div>
                          </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>Face Beauty Tips:</h3>
                                  <p>
                                    Face Wrinkles solutions, Tips for Pimple cure(acne), Tips forFair skin, Tips for Glowing face, Blackheads solution .
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/big/02.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>Hair Beauty Tips:</h3>
                                  <p>
                                    Dandruff Solutions, loss hair, dry hair, prevent hair fall, hair regrowth, foods for hair,yoga for hair, healthy hair tips, beautiful hair care.
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/big/03.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>Skin Beauty Tips:</h3>
                                  <p>
                                    Are you getting tired using expensive products, remedies for skin beauty tips & still not get glowing skin, long & shinny hairs? This app is very useful for skin care and a treatment for skin allergy with some beauty tips for skin caring of women and men it is a skin care app for men and women both.
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/big/04.png') }}">
                            </div>
                          </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                          <div class="row">
                            <div class="col-md-7">
                                <div class="cnt">
                                  <h3>Arms and Feet Beauty Tips:</h3>
                                  <p>
                                    Considering the huge responsibility hands and legs have, it wouldn't be an exaggeration to say that we don’t always give them the kind of care and attention that they deserve. We ignore them, but it’s not too late to make amends. In this app we give you many ways to revive your hands and feet without heading to the salon.  
                                  </p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('home_page/resources/image/feature_app/beauty/big/05.png') }}">
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="subscribe" data-aos="fade-up">
          <div class="container-fluid">
            <div class="padding-left-right">
              <div class="tot-cnt">
                <div class="row">

                  <div class="col-md-6">
                    <h4 class="fr_h4_font_medium">subscribe now</h4>
                    <p>Subscribe to Saj App for Your Beauty Services</p>
                  </div>
  
                  <div class="col-md-6">
                    <p>
                      Sign up to Saj for notification and all offer also Valid
                      subscribers are getting Monthly newsletter.
                    </p>
                    <form action="">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-8">
                            <input type="text" class="form-control" name="phone" placeholder="Phone number">
                          </div>
                          <div class="col-md-4">
                            <button type="submit" class="btn btn-default">Subscribe</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection