<?php

namespace App\Http\Livewire\Backend;

use App\Models\Catalogue;
use App\Models\Portfolio;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowCatalogue extends Component
{
    use WithFileUploads;
    public $catalogue_name;
    public $image;
    public $name;
    public $lastInserted;   

    public function addPortfolio(){
        $catalogue= $this->getCatalogueInfo();
        $this->validate(['image'=>'required|file|mimes:png,jpg,pdf,mp4,mp3|max:102400']);
        $path='public/catalogue/';
        $getExtension = $this->image->getClientOriginalExtension();
        $new_name = time().'.'.$getExtension;
        $this->image->storeAs($path, $new_name);
        $lastInserted=Portfolio::create(
            [
                'catalogue_id' => $catalogue->id,
                'name'  => $new_name
            ]);
            $this->reset();
            $this->lastInserted = $lastInserted;    
    }

    public function delete($id){
        $item = Portfolio::where('id', $id)->first();
        if($item->name  && 'public/catalogue/'.$item->name){
            unlink('storage/catalogue/'.$item->name);
        }
        Portfolio::where('id',$id)->delete();
    }



    public function render()
    {
        
        $catalogue=$this->getCatalogueInfo();
        return view('livewire.backend.show-catalogue', compact('catalogue'));
    }

    protected function getCatalogueInfo(){
        if($this->lastInserted == null){
            return Catalogue::with(['portfolios'])->where('slug', $this->catalogue_name)->first();
        }
        
        return Catalogue::with(['portfolios'])->where('id',$this->lastInserted->catalogue_id)->first();
         
    }

  
        
}
