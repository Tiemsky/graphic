<?php

namespace App\Http\Livewire;

use App\Models\Catalogue;
use Livewire\Component;

class CatalogueMenu extends Component
{
    public function render()
    {
        $catalogues = Catalogue::all();
        return view('livewire.catalogue-menu', compact('catalogues'));
    }
}
