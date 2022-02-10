@extends('firebase.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Registration Data
                            <a href="{{ url('data')}}" class="btn btn-sm btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-registration/'.$key) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <input type="text" name="full_name" value="{{$editdata['fullname']}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="{{$editdata['email']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" value="{{$editdata['password']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Phone No</label>
                                <input type="phone" name="phone_no" value="{{$editdata['phone']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Rfid No</label>
                                <input type="number" name="rfid_no" value="{{$editdata['rfidno']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Roll No</label>
                                <input type="number" name="roll_no" value="{{$editdata['rollno']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Standard</label>
                                <input type="number" name="standard" value="{{$editdata['standard']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Division</label>
                                <input type="text" name="division" value="{{$editdata['division']}}"  class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection