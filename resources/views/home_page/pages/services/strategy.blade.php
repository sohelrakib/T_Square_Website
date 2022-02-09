@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="strategy">

  <div class="service_header">
    <div class="container-fluid">
      <div class="padding-left-right">
        <h2 class="heading">
          <span class="bold">strategy</span>
          <span class="light">and  consultry</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="service_development">
    <div class="container-fluid">
      <div class="padding-left-right">
        <div class="row">
          <div class="col-md-5">
            <img src="{{ asset('home_page/resources/image/service_app/strategy/overview.png') }}" class="img-responsive" data-aos="fade-right">
          </div>
          <div class="col-md-7">
            <h4 class="sr_h4_color_red">overview</h4>
            <h3 class="sr_h3_color_dark_blue">software consultancy</h3>
            <p>
              If you need help identifying the technology barriers that stand between you and 
              a more profitable business, our software consultants can help. 
              <br><br> 
              We’ve been providing consulting and advisory services for over 1.5 years. 
              Our experienced Consultants will give you an unbiased, independent view of 
              how best to align your technology with your business plan.
              <br><br>  
              At T-Square, the market's sharpest IT consultants are ready 
              to offer their expertise in system development and management of your IT solutions. 
              We provide value-adding software solutions to the public sector, 
              life and pension companies, as well as chosen businesses in the private sector. 
              We are passionate about developing IT solutions that increase service, accessibility and efficiency.  
            </p>
            <a class="btn btn-success sr_request_quote"  href="{{route('contact-us')}}">request a quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>
@endsection