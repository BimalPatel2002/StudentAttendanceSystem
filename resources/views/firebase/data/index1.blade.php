@extends('firebase.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Attendance List (Total:{{ $total_Attendance }})</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Rfid no</th>
                                    <th>Standard</th>
                                    <th>Division</th>
                                    <th>Roll no</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @forelse ($data as $key => $item)
                                <tr>
                                    {{-- <td>{{ $key }}</td> --}}
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item['fullname'] }}</td>
                                    <td>{{ $item['rfidno'] }}</td>
                                    <td>{{ $item['standard'] }}</td>
                                    <td>{{ $item['division'] }}</td>
                                    <td>{{ $item['rollno'] }}</td>
                                    <td><?php echo substr($item['date'],5); ?></td>
                                    <td><?php echo substr($item['time'],5); ?></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">No Record Found</td>
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