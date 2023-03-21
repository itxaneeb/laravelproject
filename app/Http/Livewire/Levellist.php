<?php

namespace App\Http\Livewire;

use App\Models\levellist as ModelsLevellist;
use Livewire\Component;

class Levellist extends Component
{
    public function render()
    {
        $levellist =  ModelsLevellist::all();
        return view('livewire.levellist',['levellist' => $levellist]);
    }
}
