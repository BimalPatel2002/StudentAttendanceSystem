@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <title>Student Monitoring System</title>
</head>

<body>
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900    sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-blue-700">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-blue-700">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        
    </div> --}}


  <!-- START: First Section for Left Column Text & right column Image -->
  <section class="blue-hero-div pt-4 pb-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <h4>Quality - Support - Value</h4>
          <h1>Best In Class IT Services</h1>
          <h5>If its a website or an app or graphics, we can develop it for you at affordable rates. Send us your
            requirements.</h5>
          <br>
          <button style="color: #fff; background-color: #004d80" type="button" class="btn btn-lg">Get Started</button>
          <a style="color: #fff;font-weight: 700" href="#">Check Pricing details</a>
        </div>

        <div class="col-md-7">
          <img class="img-fluid" src="imgs/hero-img-half.jpg">
        </div>

      </div>

    </div>
  </section>
  <!-- END: First Section for Left Column Text & right column Image -->

  <!-- START: Third Section for Our services -->
  <section>
    <div class="container">
      <div class="row mt-4">
        <div class="col text-center">
          <h3>
            Our Best in Class Services
          </h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/web-design.png" alt="Card image cap">
          <h5>
            Web Desigining
          </h5>
          <p>
            We have a talent pool of experienced web designers <a href="#"><b>Read more...</b></a>
          </p>

        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/web-development.png" alt="Card image cap">
          <h5>
            Web Development
          </h5>
          <p>
            Get customized website developed in professional way. <a href="#"><b>Read more...</b></a>
          </p>

        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/seo.png" alt="Card image cap">
          <h5>
            SEO services
          </h5>
          <p>
            Rank your website number 1 to grab your valuable customers. <a href="#"><b>Read more...</b></a>
          </p>

        </div>
      </div>

      <div class="row mb-md-3">
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/software-dev.png" alt="Card image cap">
          <h5>
            Software Development
          </h5>
          <p>
            Customized software solutions according to your needs. <a href="#"><b>Read more...</b></a>
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/mobile-app.png" alt="Card image cap">
          <h5>
            Mobile Development
          </h5>
          <p>
            Built Android & iOS Apps for your business to scale your reach. <a href="#"><b>Read more...</b></a>
          </p>
        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-5" src="imgs/services/graphic-design.png" alt="Card image cap">
          <h5>
            Graphic Designing
          </h5>
          <p>
            Get your branding done right with our professional designers. <a href="#"><b>Read more...</b></a>
          </p>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- END: Third Section for Our services -->
  </div>

<!-- Body Ends -->
</body>
</html>
   
@endsection