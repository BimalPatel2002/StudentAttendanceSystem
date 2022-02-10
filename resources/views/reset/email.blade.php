{{-- <botstrap links> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <title>Verify Email</title>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify Your Email Address</div>

                <div class="card-body">
                  @if (session('resent'))
                      <div class="alert alert-success" role="alert">
                          {{ __('A fresh verification link has been sent to your email address.') }}
                      </div>
                  @endif
                  @if(Session::has('error'))
                    <p class=" pb-3 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                  @endif

                    Before proceeding, please check your email for a verification link.
                    If you did not receive the email

                        <form class="d-inline" method="POST" action="App\Http\Controllers\Auth\ResetController@verify">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="text-decoration:none;">{{ __('click here to request another') }}</button>.
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
