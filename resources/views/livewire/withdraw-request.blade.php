<div class="card">
    <h5 class="card-header">Withdraw Requset</h5>
    <div class="table-responsive text-nowrap">
    <table class="table">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Amount</th>
            <th>Account Number</th>
            <th>Account Name</th>
            <th>Account Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          
       @foreach ($user as $user)
        <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->user_id }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->Amount }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->accountnumber }}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->accountname}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->accounttype}}</strong></td>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> 
            <div style="display: flex">
                <button wire:click.prevent="approved({{ $user->id }})" class="btn btn-primary" type="button">Approve</button>
                <button wire:click.prevent="rejected({{ $user->id }})" class="btn btn-primary" type="button">Rejected</button>
            </div>
            </td>
        </tr>
       @endforeach
        </tbody>
    </table>
    </div>
</div>