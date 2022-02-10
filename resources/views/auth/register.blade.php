{{-- @extends('layouts.app')

@section('content')
@endsection --}}
    

<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/register-form.css" />
  
  <title>Register</title> 
</head>

<body>
  <div>

        @if(Session::has('error'))              
              <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
        @endif

      <form method="post" action="{{ route('register') }}">
        @csrf
      <h1>REGISTRATION FORM</h1>
      <div class="imgcontainer">
        <img src="/imgs/students-cap.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <table>
            <tr>
                <td><label for="name"><b>Enter Name</b></label></td>
                <td><input type="text" id="name" placeholder="Enter Username" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus></td>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
            <tr>    
                <td><label for="email"><b>Enter Email</b></label></td>
                <td><input id="email" type="email" placeholder="Enter Id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required></td>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </tr>
            <tr>
                <td><label for="password"><b>Enter Password</b></label></td>
                <td><input id="password" type="password" placeholder="Enter Password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"></td>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </tr>
            <tr>
                <td><label for="password-confirm"><b>Confirm Password</b></label></td>
                <td><input type="password" id="password-confirm" placeholder="Confirm Password"         name="password_confirmation" required autocomplete="new-password"></td>
            </tr>
            <tr> 
                <td colspan="2"><button class="login-button" type="submit">Register</button></td>
            </tr>
        </table>
      </div>
    </form>
  </div>
</body>
</html>
