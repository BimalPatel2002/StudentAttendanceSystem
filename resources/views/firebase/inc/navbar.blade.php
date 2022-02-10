<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004d80;">
    <div class="container">
      <a class="navbar-brand" href="{{ url('data') }}">Student Monitoring System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('data') }}">Registration List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('attendance_list') }}">Attendance List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">    
            @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>