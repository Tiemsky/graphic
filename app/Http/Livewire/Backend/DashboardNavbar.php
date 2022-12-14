<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class DashboardNavbar extends Component
{
    protected $listeners = ['photoUpdated'=>'render'];
    public function render()
    {
        return view('livewire.backend.dashboard-navbar');
    }
}
