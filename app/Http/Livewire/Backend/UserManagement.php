<?php

namespace App\Http\Livewire\Backend;

use App\Models\EnableRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserManagement extends Component
{
    public $lastName,$firstName,$email,$gender,$role,$userID;

    //Adding new user from dashboard
    public function addNewUser(){
        $this->validateData();
        User::create(array_merge($this->validateData(),$this->defaultPasswordGenerator()));
        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
        sleep(.1);
        $this->dispatchBrowserEvent('notification' ,['type'=>'success','message'=>'New user created successfully']);
        return;
    }

    public function editUser($id){
        $user =User::where('id',$id)->first();
        $this->lastName = $user->lastName;
        $this->firstName = $user->firstName;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->gender = $user->gender;
    }

    //Fetching the current user ID information
    public function getUserInfo($id){
        $this->userID = $id;
    }

    //Deleting user
    public function delete(){
        User::where('id',$this->userID)->delete();
        $this->dispatchBrowserEvent('closeModal');
        sleep(.1);
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'User deleted successfully!']);
        return;

    }

    private function validateData(){
        return $this->validate([
            'lastName' => 'required',
            'firstName' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'gender' => 'required',
        ]);
    }


    //Enable registration view from backend toggle function
    public $registrationStatus ;
    public function toggleRegistration(){
        EnableRegistration::where('id',1)->update(['is_registration_enabled'=> !$this->registrationStatus]);
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'Registration panel status updated successfully!']);
        return;
    }

    //setting a default password for a new user created
    private function defaultPasswordGenerator(){
        $password= Hash::make('Mypassword');
        return ['password' => $password];
    }


    public function render(){
        $users = User::latest()->where('role','<=', 1)->get();
        $registration =EnableRegistration::first();
        $this->registrationStatus = $registration->is_registration_enabled;
        return view('livewire.backend.user-management',compact('users','registration'));
    }
}
