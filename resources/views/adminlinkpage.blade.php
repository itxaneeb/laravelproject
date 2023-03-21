@extends('admin.admindashboard');

@section('content')
    {{-- @dd('here'); --}}
        <div class="card">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h5 class="card-header">Show Products</h5>
            
                <div>
                    <a href="{{ route('addmoreproducts') }}" class="btn btn-primary">Add products</a>
                </div>
                
                
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Link</th>
                    <th>Reward</th>
                    <th>Level id</th>
                    <th>Package id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
               {{-- @foreach ($users as $user)
               @dd($user);
                <tr>
                    <td>
                        @if ($user->image)
                            <img src="{{ asset( $user->image) }}" alt="{{ $user->name }}" style="width: 100px; height: auto; object-fit: cover;"/>
                        @else
                        <img src="{{ ('assets/images/noimage.jpg') }}" alt="Default Image" style="width: 100px; height: auto; object-fit: cover;" />
                        @endif
                    </td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->price }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->reward }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->packageid}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->levelid}}</strong></td>
                    <td>
                        <a href="{{ route('editaddproduct',$user->id) }}" class="btn btn-danger"> Edit</a>
                        <a href="{{ route('deleteaddproduct',$user->id) }}" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
               @endforeach --}}
                </tbody>
            </table>
            </div>
        </div>
    
@endsection