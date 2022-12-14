<?php

namespace App\Http\Livewire\Backend;

use App\Models\Catalogue;
use Livewire\Component;

class SideBar extends Component
{
    protected $listeners = 
        [
            'portfolioListUpdated'   => 'render',
        ];
    public function render()
    {
        $catalogues = Catalogue::all();
        return view('livewire.backend.side-bar', compact('catalogues'));
    }
}
