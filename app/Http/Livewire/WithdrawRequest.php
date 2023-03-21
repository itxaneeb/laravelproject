<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\WithdrawRequest as ModelsWithdrawRequest;
use Livewire\Component;


class WithdrawRequest extends Component
{
    public $approve;
    public $status = 'pending';
    public $WithdrawRequest;
    

    public function render()
    {
        $user = ModelsWithdrawRequest::where('status','pending')->get();
        return view('livewire.withdraw-request', compact('user'));
    }
    public function approved($id)
{
    $withdrawrequest = ModelsWithdrawRequest::find($id);
    $user = User::find($withdrawrequest->user_id);
    if ($withdrawrequest->Amount <= $user->user_balance) {      
        $user->user_balance = $user->user_balance - $withdrawrequest->Amount;
        $user->save();
        $withdrawrequest->status = 'approved';      
        $withdrawrequest->save();
    }
    
    return redirect()->back();
}


    public function rejected($id)
    {
        
        $user = ModelsWithdrawRequest::find($id);
        
       $user->status = 'rejected';
      
       $user->save();

       return redirect()->back();
    }
}
