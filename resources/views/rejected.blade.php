@extends('admin.admindashboard');

@section('content')
    {{-- @dd('here'); --}}
        <div class="card">
            <h5 class="card-header">Table Basic</h5>
            <div>
                 <a href="{{ route('rejected') }}" class="btn btn-primary">Rejected</a>
                <a href="{{ route('usertable') }}" class="btn btn-primary">Approved</a>
            </div>
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Sender Number</th>
                    <th>Package id</th>
                    <th>txr_id</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    {{-- @dd($users); --}}
               @foreach ($users as $user)
               
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->f_name }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->l_name }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->email}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->phone}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->address}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->sendernumber }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->package_id }}</strong></td>                  
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->trx_id }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->status }}</td>
                </tr>
               @endforeach
                </tbody>
            </table>
            </div>
        </div>
    
@endsection
