@extends('firebase.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Registration Data
                            <a href="{{ url('data')}}" class="btn btn-sm btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('add-registration' )}}" method="POST">
                            @csrf

                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Phone No</label>
                                <input type="phone" placeholder="+91" name="phone_no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Rfid No</label>
                                <input type="number" name="rfid_no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Roll No</label>
                                <input type="number" name="roll_no" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Standard</label>
                                <input type="number" name="standard" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Division</label>
                                <input type="text" name="division" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection