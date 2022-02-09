@extends('home_page.layout.master')

@section('title')
  {{$title}}
@endsection

@section('content')
<div class="contact_header">
  <div class="container-fluid">
    <div class="padding-left-right">
      <h2 class="heading">
        contact us
      </h2>
    </div>
  </div>
</div>


<div class="contact_form">
  <div class="container-fluid">
    <div class="padding-left-right">

        <div class="tot-cnt">
          <div class="row">
            <div class="col-md-4">
              <div class="cnt left">
    
                <h2 class="h2-font-weight-medium">get in touch</h3>
                <img src="{{ asset('home_page/resources/image/contact_us/message.png') }}">
                <p>
                  Thank you for your time, please send anything (your questions, queries, feedback) to us.
                  <br><br>
                  We are listening...
                </p>
    
              </div>
            </div>
            <div class="col-md-8">
              <div class="cnt">
    
                <form action="">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="your Name:*">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email:*">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject:*">
                  </div>
                  <div class="form-group">
                    <textarea  class="form-control" name="message" rows="6" placeholder="Your Message:*"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-default blue-button">Send Message</button>
                </form>
    
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col-md-4">
              <div class="cnt left">
                <h2 class="h2-font-weight-medium">contact info</h3>
                <p>FOR ANY KIND OF QUERY 
                  REGARDING COMPANIES 
                  INFORMATION
                  <br><br>
                  (LEGAL AND ADMIN), PLEASE MAIL TO: admin@tsquare.com
                </p>
              </div>
            </div>
            <div class="col-md-8">
              <div class="cnt icons">
    
                <div class="row">
                  <div class="col-md-2">
                    <i class="fas fa-map-marker-alt first"></i>
                  </div>
                  <div class="col-md-10">
                    <p>
                      T Square Limited <br>
                      Road # 19/A, House # 8 <br>
                      Banani, Dhaka, Bangladesh-1213
                    </p>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-2">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="col-md-10">
                    <p>
                      +88 0184 3900 056 <br>
                      +88 0175 9692 020
                    </p>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-2">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="col-md-10">
                    <p>
                      info@tsquare.com <br>
                      support@tsquare.com
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

<!-- <div class="contact-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1085.3847427876326!2d90.40914911447908!3d23.79068502888255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7c6df560017%3A0x7d9d65d5ca4ee173!2sMiaki%20Media%20Ltd.!5e0!3m2!1sen!2sbd!4v1615357919644!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div> -->
@endsection