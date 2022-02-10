@extends('firebase.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <h4 class="alert alert-success mb-2">{{session('status')}}</h4>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Registration List (Total:{{ $total_registrations }})
                            <a href="{{ url('add-registration' )}}" class="btn btn-sm btn-primary float-end">Add Registration</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Phone Number</th>
                                    <th>Rfid Number</th>
                                    <th>Roll Number</th>
                                    <th>Standard</th>
                                    <th>Division</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @forelse ($data as $key => $item)
                                <tr>
                                    {{-- <td>{{ $key }}</td> --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item['fullname'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['password'] }}</td>
                                    <td>{{ $item['phone'] }}</td>
                                    <td>{{ $item['rfidno'] }}</td>
                                    <td>{{ $item['rollno'] }}</td>
                                    <td>{{ $item['standard'] }}</td>
                                    <td>{{ $item['division'] }}</td>
                                    <td><a href="{{ url('edit-registration/'.$key) }}" class="btn btn-sm btn-success">Edit</a></td>
                                    <td><a href="{{ url('delete-registration/'.$key) }}" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10">No Record Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection