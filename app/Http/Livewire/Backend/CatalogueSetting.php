<?php

namespace App\Http\Livewire\Backend;

use App\Models\Catalogue;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CatalogueSetting extends Component
{
    use WithFileUploads;
    public $catalogueCoverFolder ='storage/catalogue/cover';
    public function render()
    {
        $catalogues = Catalogue::all();
        return view('livewire.backend.catalogue-setting', compact('catalogues'));
    }

    public $name, $cover;
    public function add(){
        $this->validate([
            'name'=>'required',
            'cover'=>'required|image|max:10240'
        ]);
        $path='public/catalogue/cover';
        $getExtension = $this->cover->getClientOriginalExtension();
        $new_name = time().'.'.$getExtension;
        $this->cover->storeAs($path, $new_name);
        if(!Catalogue::exists()){
            Catalogue::create([
                'name'=>$this->name,
                'cover'=>$new_name,
                'slug'=>str::slug($this->name),
                'front_page'=>1
            ]);
        }else{
            Catalogue::create([
                'name'=>$this->name,
                'cover'=>$new_name,
                'slug'=>str::slug($this->name)
            ]);
        }
        
        $this->reset();
        $this->emit('portfolioListUpdated');
    }


    public $toBeUpdated;
    public function update(){
        $catalogueID = $this->toBeUpdated;
        if($this->name && $this->cover){
            $catalogue = Catalogue::where('id', $catalogueID)->first();
            $path=$this->catalogueCoverFolder;
            if($catalogue->cover  && $path.'/'.$catalogue->cover){
                unlink($path.'/'.$catalogue->cover);
            }

            $this->validate([
                'name'=>'required',
                'cover'=>'required|image|max:10240'
            ]);
            $path='public/catalogue/cover';
            $getExtension = $this->cover->getClientOriginalExtension();
            $new_name = time().'.'.$getExtension;
            $this->cover->storeAs($path, $new_name);

            Catalogue::where('id',$catalogueID)->update([
                'name'=>$this->name,
                'cover'=>$new_name,
                'slug'=>str::slug($this->name),
            ]);
            
        }
        if($this->name){
            $this->validate([
                'name'=>'required',
            ]);
            Catalogue::where('id',$catalogueID)->update([
                'name'=>$this->name,
                'slug'=>str::slug($this->name),
            ]);
        }

        if($this->cover){
            $catalogue = Catalogue::where('id', $catalogueID)->first();
            $path=$this->catalogueCoverFolder;
            if($catalogue->cover  && $path.'/'.$catalogue->cover){
                unlink($path.'/'.$catalogue->cover);
            }

            $this->validate([
                'cover'=>'required|image|max:10240'
            ]);
            $path='public/catalogue/cover';
            $getExtension = $this->cover->getClientOriginalExtension();
            $new_name = time().'.'.$getExtension;
            $this->cover->storeAs($path, $new_name);

            Catalogue::where('id',$catalogueID)->update([
                'cover'=>$new_name,
            ]);
        }

        $this->reset();
        $this->emit('portfolioListUpdated');
        $this->dispatchBrowserEvent('updated');
    }

    public function setFrontPagePortfolio($catalogueID){
        if(Catalogue::where('front_page', 1)->first()){
            Catalogue::where('front_page', 1)->update(['front_page'=>0]);
        }
        Catalogue::where('id', $catalogueID)->update(['front_page'=>1]);
    }

    public function getCatalogueInfo($id){
        $catalogue = Catalogue::where('id', $id)->first();
        $this->name = $catalogue->name;
        $this->toBeUpdated = $id;
    }

    public function delete($id){
        $catalogue = Catalogue::where('id', $id)->first();
        $path=$this->catalogueCoverFolder;
        if($catalogue->cover  && $path.'/'.$catalogue->cover){
            unlink($path.'/'.$catalogue->cover);
        }
        $catalogue = Catalogue::where('id', $id)->delete();
        $this->emit('portfolioListUpdated');
    }

}
