@extends('admin.admindashboard');

@section('content')
    {{-- @dd('here'); --}}
        <div class="card">
            <h5 class="card-header">User Table</h5>
            <div>
                 <a href="{{ route('rejected') }}" class="btn btn-primary">Rejected</a>
                <a href="" class="btn btn-primary">Approved</a>
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
                    <th>Action</th>
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
                       <td>
                            <a href="{{ route('editusertable',$user->id) }}" class="btn btn-primary" type="button">
                                    Edit
                            </a>
                       </td>
                </tr>
               @endforeach
                </tbody>
            </table>
            </div>
        </div>
    
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script> --}}
<script>
    
//     function approved(id){
//         // alert("sdff");
//         const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
//         const approved = {
//             user_id:id
//         }
//         fetch ('newuserrr',{
//             method : 'POST',
//             headers:{
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': csrfToken
//                      },
//             body: JSON.stringify(approved)
//         })
//         .then(data => {
//                 return data.json();
//         })
//             .then(post => {
//                 window.location.reload();
//              });

//     }
// </script>