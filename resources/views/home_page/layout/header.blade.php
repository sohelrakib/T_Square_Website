<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="padding-left-right">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{ asset('home_page/resources/image/nav_logo.png') }}">
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
          <li><a href="{{route('home')}}">home</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              our services  <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('service.software')}}">Software Development</a></li>
              <li><a href="{{route('service.website')}}">Website Development</a></li>
              <li><a href="{{route('service.app-design')}}">App Development</a></li>
              <li><a href="{{route('service.marketing')}}">Digital Marketing</a></li>
              <li><a href="{{route('service.platform')}}">Platform Manage</a></li>
              <li><a href="{{route('service.strategy')}}">Strategy and Consultry</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              featured apps <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="{{route('feature.islamic')}}">Islamic App</a></li>
              <li><a href="{{route('feature.health')}}">Health App</a></li>
              <li><a href="{{route('feature.love')}}">Love App</a></li>
              <li><a href="{{route('feature.beauty')}}">Beauty App</a></li>
              <li><a href="{{route('feature.joke')}}">Joke App</a></li>
              <li><a href="{{route('feature.recipe')}}">Recipe App</a></li>
            </ul>
          </li>

          <li><a href="{{route('about-us')}}">about us</a></li>

          <li><a href="{{route('contact-us')}}">contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>