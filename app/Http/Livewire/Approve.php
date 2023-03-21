<?php

namespace App\Http\Livewire;

use App\Models\levellist;
use App\Models\Package;
use App\Models\User;
use Livewire\Component;

class Approve extends Component
{
    
    public $approve;
    public $status = 'pending';
    public $user;
    public function render()
    {   
        $users = User::where('status',$this->status)->where('role','user')->where('trx_id','!=',NULL)->get();
        $packages = Package::all();
        return view('livewire.approve',compact('users','packages'));
    }

    public function approved($id)
    {
        $user = user::find($id);
        $level = levellist::first()->id;

        $user->level_id = $level;

       $user->status = 'approved';
       $user->save();
        
       $invite = User::find($user->invite_id);

    if ($invite) {
        $record = levellist::find($invite->level_id);
        $package = Package::find($user->package_id);
        $inviteId = $user->invite_id;
        // $firstuser = User::where('invite_id', $inviteId)->first();
        $total_team = User::where('invite_id',$inviteId)->where('status','approved')->count();
        
        if($total_team > $record->totalmember){
            $user->level_id += 1;
        };
        
        $packageprice = $package->price;
        $firstcommision = $record->firstperson;
        
        $commission =  $firstcommision/$packageprice;
        $commissionAmount = $commission * 100 ;
        
        $invite->team_earning += $commissionAmount;  
        $invite->user_balance += $commissionAmount;    

        $invite->save();
    }

        $secondperson = User::find($invite->invite_id);

        if ($secondperson) {
       
            $record = levellist::find($invite->level_id);
            $firstcommision = $record->secondperson;
            
            $commission =  $firstcommision/$packageprice;
            $commissionAmount = $commission * 100 ;
            
            $secondperson->team_earning += $commissionAmount;    
            $secondperson->user_balance += $commissionAmount;    
    
            $secondperson->save();
    
        }

        $thirdperson = User::find($secondperson->invite_id);
        
        if ($thirdperson) {
       
            $record = levellist::find($invite->level_id);
            $firstcommision = $record->thirdperson;
            
            $commission =  $firstcommision/$packageprice;
            $commissionAmount = $commission * 100 ;
            
            $thirdperson->team_earning += $commissionAmount;    
            $thirdperson->user_balance += $commissionAmount;    
    
            $thirdperson->save();
    
        }
        
       return redirect()->back();
    }

    public function rejected($id)
    {
        
        $user = user::find($id);
        
       $user->status = 'rejected';
      
       $user->save();

       return redirect()->back();
    }
}
