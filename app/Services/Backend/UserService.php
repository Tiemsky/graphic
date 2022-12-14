<?php
namespace App\Services\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Livewire\Component;

class UserService extends Component{

    public $name, $email, $role;
    public function __construct($name, $email, $role)
    {
        $this->name=$name;
        $this->email=$email;
        $this->role=$role;
    }
    public function addUser(array $user){
        dd($user);
      }

      public function validateUser(array $input){
        $this->validate([
            $this->name=>'required',
        ]);
      }
}


