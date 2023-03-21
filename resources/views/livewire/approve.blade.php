<div class="card">
    <h5 class="card-header">Table Basic</h5>
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
            <th>Package Name</th>
            <th>Inviter Name</th>
            <th>txr_id</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          
       @foreach ($users as $user)
       {{-- @dd($user); --}}
        <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->f_name }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->l_name }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->email}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->phone}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->address}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->sendernumber }}</strong></td>
        @foreach ($packages as $package)  
                @if ($package->id == $user->package_id)
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $package->Name }}</strong></td>
                @endif
        @endforeach
       {{-- @dd('here'); --}}
    
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->invite->f_name ?? '' }}</strong></td>
               
       
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->trx_id }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
            <div style="display: flex">
                <button wire:click.prevent="approved({{ $user->id }})" class="btn btn-primary" type="button">Approve</button>
                <button wire:click.prevent="rejected({{ $user->id }})" class="btn btn-primary" type="button">Rejected</button>
            </div>
            </td>
           <div>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> 
                    <a href="">Edit</a>
                    </strong>
                </td>
               
           </div>

        </tr>
       @endforeach
        </tbody>
    </table>
    </div>
</div>