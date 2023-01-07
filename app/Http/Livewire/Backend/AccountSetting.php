<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AccountSetting extends Component
{
    use WithFileUploads;

    public $lastName,$firstName, $email, $currentPassword, $newPassword, $passwordConfirmation;
    public $notification, $accountActivation;
    public $avatar;

    protected $listeners = ['photoUpdated'=>'render'];
    public function render()
    {
        $user = Auth::user();
        return view('livewire.backend.account-setting', compact('user'));
    }

    public function mount()
    {
        $user = Auth::user();
        $this->lastName = $user->lastName;
        $this->firstName = $user->firstName;
        $this->email = $user->email;
        $this->avatar = $user->avatar;
    }

    public function updateProfile(){
        $this->validate(['lastName'=>'required','firstName'=>'required']);
        User::where('email',$this->email)->update(['lastName'=>$this->lastName, 'firstName'=>$this->firstName]);
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'Profile information updated successfully!']);

    }

    public function passwordChange(){
        $this->passwordValidation();
        if(Hash::check($this->currentPassword,Auth::user()->password)){
            User::where('id',Auth::user()->id)->update(['password'=>Hash::make($this->newPassword)]);
        }
        $this->notification='Both password did not match try again!';
        $this->resetExcept(['passwordError']);
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'password updated successfully!']);
        return ;

    }

    public function deleteAccountAlert(){
        $this->validate([
            'accountActivation'=>'accepted'
        ]);
        $this->dispatchBrowserEvent('openDeleteAccountModal');
    }


    //Password validation rules
    private function passwordValidation(){
        return $this->validate([
            'currentPassword'=>'required',
            'newPassword'   =>'required|same:passwordConfirmation'
        ]);
    }

    //updating current user profile picture
    public function uploadPhoto()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048', // 2MB Max
        ]);
        $new_name = $this->renameImage($this->avatar);
        User::where('id', Auth::user()->id)->update(['avatar' => $new_name]);
        $this->emit('photoUpdated');
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'Profile picture updated successfully!']);
        return;
    }


    //Renaming and moving photo in the avatar directory under public folder
    protected function renameImage($image)
    {
        $user=Auth::user();
        $path='public/avatar';
        if($user->avatar  && $path.'/'.$user->avatar){
            unlink('storage/avatar/'.$user->avatar);
        }
        $getExtension = $image->getClientOriginalExtension();
        $new_name = time().'.'.$getExtension;
        $image->storeAs($path, $new_name);
        return $new_name;
    }
}
