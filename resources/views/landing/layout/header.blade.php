<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="padding-left-right">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('landing/resources/image/nav_logo.png') }}">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <!-- <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Page 1-1</a></li>
            </ul>
          </li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('islamic')}}">islamic</a></li>
          <li><a href="{{route('joke')}}">joke</a></li>
          <li><a href="{{route('beauty')}}">beauty</a></li>
          <li><a href="{{route('health')}}">health</a></li>
          <li><a href="{{route('love')}}">love</a></li>
          <li><a href="{{route('recipe')}}">recipe</a></li>

          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              our services  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="service_software.html">Software Development</a></li>
              <li><a href="service_website.html">Website Development</a></li>
              <li><a href="service_app_design.html">App Development</a></li>
              <li><a href="service_marketing.html">Digital Marketing</a></li>
              <li><a href="service_platform.html">Platform Manage</a></li>
              <li><a href="service_strategy.html">Strategy and Consultry</a></li>
            </ul>
          </li> -->

          <!-- <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              featured apps <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="feature_islamic.html">Islamic App</a></li>
              <li><a href="feature_health.html">Health App</a></li>
              <li><a href="feature_love.html">Love App</a></li>
              <li><a href="feature_beauty.html">Beauty App</a></li>
              <li><a href="feature_joke.html">Joke App</a></li>
              <li><a href="feature_recipe.html">Recipe App</a></li>
            </ul>
          </li> -->

          <!-- <li><a href="about_us.html">about us</a></li> -->

          <!-- <li><a href="contact_us.html">contact us</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</nav>