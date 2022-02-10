<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login-form.css" />
  <title>Login</title>
</head>

<body>
  <div>
      <form method="post" action="{{ route('login') }}">
        @csrf
      <h1>LOGIN FORM</h1>
      <div class="imgcontainer">
        <img src="/imgs/students-cap.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="email"><b>Enter Id</b></label>

        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">

        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>

        <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <br>

        <label for="password"><b>Password</b></label>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unlock-fill" viewBox="0 0 16 16">

        <path d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z"/>
        </svg>

        <input type="password" id="password" placeholder="Enter Password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror

        <br>
        <button class="login-button" type="submit">Login</button><br>
        <span class="psw btn btn-link"><a href="/password/reset">Forgot password?</a></span>

      </div>
    </form>
  </div>


      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script>
      // Initialize Firebase
      var firebaseConfig = {
        apiKey: "AIzaSyBUtt5zb8gj-ad6eM_FESOLLS2zcbLlpJ8",
        authDomain: "sms-83bd5.firebaseapp.com",
        databaseURL: "https://sms-83bd5-default-rtdb.firebaseio.com",
        projectId: "sms-83bd5",
        storageBucket: "sms-83bd5.appspot.com",
        messagingSenderId: "519792365993",
        appId: "1:519792365993:web:44922734eb8e76d0f474b8",
        measurementId: "G-5038MRJ82B"
      };
      </script>

</body>
</html>
