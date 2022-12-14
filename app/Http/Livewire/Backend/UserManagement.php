<?php

namespace App\Http\Livewire\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserManagement extends Component
{
    public $lastName,$firstName,$email,$gender,$role,$userID;

    public function mount(){

    }

    public function addNewUser(){
       
        $this->validateData();
        User::create(array_merge($this->validateData(),$this->defaultPasswordGenerator()));
        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function editUser($id){
        $user =User::where('id',$id)->first();
        $this->lastName = $user->lastName;
        $this->firstName = $user->firstName;
        $this->email = $user->email;
        $this->role = $user->role;
        $this->gender = $user->gender;
    }

    public function getUserInfo($id){
        $this->userID = $id;
    }

    public function delete(){
        User::where('id',$this->userID)->delete();
        $this->dispatchBrowserEvent('closeModal');
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



    private function defaultPasswordGenerator(){
        $password= Hash::make('Mypassword');
        return ['password' => $password];
    }

    public function render(){
        $users = User::latest()->get();
        return view('livewire.backend.user-management',compact('users'));
    }
}
