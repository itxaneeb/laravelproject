@extends('admin.admindashboard');

@section('content')
    {{-- @dd('here'); --}}
        <div class="card">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h5 class="card-header">Links </h5>
            
                <div>
                    <a href="{{ route('addlinks') }}" class="btn btn-primary">Add Links</a>
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
               @foreach ($users as $user)
               {{-- @dd($user); --}}
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->url }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->reward }}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->level_id}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->pacakge_id}}</strong></td>
                    
                    <td>
                        <a href="{{ route('editlinks',$user->id) }}" class="btn btn-danger"> Edit</a>
                        <a href="{{ route('deletelink',$user->id) }}" class="btn btn-danger"> Delete</a>
                    </td>
                </tr>
               @endforeach
                </tbody>
            </table>
            </div>
        </div>
    
@endsection