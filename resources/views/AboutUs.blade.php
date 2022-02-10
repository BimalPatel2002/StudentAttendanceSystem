@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">

<head>
  <title>About Us</title>
</head>

<body>

  <!-- START: Breadcrumb section -->
  <section class="section-breadcrumps">
    <div class="container p-sm-2">
      <div class="row">
        <div class="col-12">
          <h2>
            About Us
          </h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- END: Breadcrumb section -->

  <!-- START: About Company section -->
  <section class="section-about-company pt-md-2 pb-md-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <h2 class="text-center">
            Student monitoring system
          </h2>
          <hr>
        </div>
        {{-- class="col-md-3" --}}
        <div>
          <img class="img-fluid user-graduate" src="imgs/user-graduate-solid.svg" />
        </div>
        <div class="col-md-9">
          <p class="text-justify">
            This project is about Student Monitoring system developed by using laravel framework in this system admin can login register and perform day to day task of school.
            In this application there is a dashboard which admin can access once he login through his id and password system is made in such a way that without authentication
            no one can access dashboard also system is linked with firebase database for realtime database use and others can surf our website and also contact us for any query related. 
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- END: BAbout Company section -->


  <!-- START: Team section -->
  <section>
    <div class="container">
      <div class="row mt-3">
        <div class="col text-center">
          <h3>
            Our awesome team
          </h3>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-4" src="imgs/team/java-developer.png">
          <h5>
            Developer
          </h5>
          <p>
            <i>- Bimal Patel</i>
          </p>

        </div>
        <div class="col-md-4 text-center">
          <img class="img-fluid feature-img p-4" src="imgs/team/senior-analyst.png">
          <h5>
            Developer
          </h5>
          <p>
            <i>- Ganesh Varma</i>
          </p>

        </div>
        <div class="col-md-4 text-center">
            
            <img class="img-fluid feature-img p-4" style="border-radius:100%" src="imgs/henil.png">
            <h5>
              Developer
            </h5>
            <p>
              <i>- Henil Soni</i>
            </p>
        </div>
      </div>

    </div>
    </div>
  </section>
  <!-- END: Team section -->
</body>

</html>

@endsection