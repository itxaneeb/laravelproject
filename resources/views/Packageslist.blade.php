@extends('admin.admindashboard');

@section('content')
   
        <div class="card">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h5 class="card-header">Pacakges</h5>
            <div>
                <a href="{{ route('addpackages') }}" class="btn btn-primary">Add Packages</a>
            </div>
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Waiting Description</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
               @foreach ($users as $user)              
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->Name }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->price }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->waiting_description }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                        <a href="{{ route('editpackageslist', $user->id) }}" class="btn btn-primary">Edit</a>
                    </strong></td>
                </tr>
               @endforeach
                </tbody>
            </table>
            </div>
        </div>
    
@endsection
