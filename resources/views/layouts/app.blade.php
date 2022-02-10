<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Monitoring System</title>

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <!-- Our custom CSS -->
    <link rel="stylesheet" href="css/customstyle.css" />

    {{-- <botstrap links> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header>
        <!-- START: Header Top Area -->
        <div id="app">
        <div class="headerTopArea p-1">
          <div class="container">
            <div class="row">
              <div class="text-end col-sm-12">
                <a class="p-1" href="tel:+8490904482"><i class="fas fa-phone"></i> +(91) 8490904482 </a>
                <a class="p-1" href="mailto:laravelproject.sms@gmail.com"><i class="fas fa-envelope"></i> laravelproject.sms@gmail.com </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Header Top Area -->
    
        <!-- START: Header Bottom Area -->
        <div class="headerBottomArea">
    
          <div class="container-fluid" style="padding-left:0% ; padding-right:0%">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004d80;">
              <a class="navbar-brand" style="padding-left:1em" href="/">
                <img src="/imgs/user-graduate-solid.svg" width="30" alt="Student logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/data') }}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="AboutUs">About Us</a>
                  </li>
                </ul>
                <ul class="navbar-nav" style="margin-left:71%">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="margin-left: 100%">{{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">    
                            @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!-- END: Header Bottom Area -->
    </header>

    <main>
      @yield('content')
   </main>

<!-- START: Footer -->
<footer class="fullfooter">
    <div class="container p-md-3 p-1 topFooter">
      <div class="row p-2 p-sm-0">
        <div class="col-md-8">
          <img class="img-fluid" src="imgs/students-cap.png" width="50px"/>
          <p class="text-left-justify">
            This project is about Student Monitoring system developed by using laravel framework in this system admin can login register and perform day to day task of school. In this application there is a dashboard which admin can access once he login through his id and password system is made in such a way that without authentication no one can access dashboard also system is linked with firebase database for realtime database use and others can surf our website and also contact us for any query related...<a href="AboutUs">Read
              more...</a>
          </p>

          <a style="color:silver;" class="p-1" href="https://www.facebook.com/photo.php?fbid=828792530519431&set=pb.100001660754888.-2207520000..&type=3"><i class="fab fa-2x fa-facebook-square"></i></a>
          <a style="color: silver;" class="p-1" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
          <a style="color: silver;" class="p-1" href="https://www.instagram.com/p/CRWkSsHgOWc/"><i class="fab fa-2x fa-instagram"></i></a>

        </div>

        <div class="col-md-3 text-left">
          <h3>Contact Us</h3>
          <a href="tel:+918490904482"><i class="fas fa-phone"></i> +(91) 8490904482 </a>
          <br><a href="mailto:laravelproject.sms@gmail.com"><i class="fas fa-envelope"></i> laravelproject.sms@gmail.com </a>
          <div class="embed-responsive embed-responsive-16by9">
            <!-- <iframe class="embed-responsive-item" src="..."></iframe> -->
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202902.24027650335!2d72.75717812903171!3d19.098888422879796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1544531259939"
              frameborder="0" style="border:0"></iframe>
          </div>

        </div>
      </div>
    </div>
    
    <div class="container-fluid bottomFooter p-1 text-center">
      <p>
        Copyrights © 2022 - All rights reserved
      </p>
    </div>

  </footer>
  <!-- END: Footer -->
</body>
</html>