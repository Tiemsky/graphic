<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\AutoReplyMail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    // public $services = ['Graphic Design','Digital Marketing','Video Editing', 'Web App & Mobile App','Photography','Others'];
    public $selectedService;
    public $selectedUserType;
    public  $services = array(
        '1' =>'Graphic Design',
        '2' =>'Digital Marketing',
        '3' =>'Video Editing',
        '4' =>'Web App & Mobile App',
        '5' =>'Photography',
        '6' =>'Others',
     );
    public $typeOfUsers=['1'=>'Individual','2'=>'Company'];
    public $contactAsCompanyByDefault;
    public $is_company = false;
    public $username;
    public $email;
    public $company_name;
    public $message;
    public function mount(){
       
         $this->contactAsCompanyByDefault = $this->typeOfUsers[1];
    }

    public function toggleTypeOfUser($index){
        $this->selectedUserType = ($this->typeOfUsers[$index]);
        $this->is_company =!$this->is_company;
    }

    public function sendData(){
        $data = [
            'selectedService' => $this->services[$this->selectedService],
            'selectedUserType'=> ($this->selectedUserType? $this->selectedUserType:$this->contactAsCompanyByDefault),
            'username'        => $this->username,
            'email'           =>$this->email,
            'company_name'    =>$this->company_name,
            'message'         =>$this->message,
        ];
        $this->reset();
        $this->dispatchBrowserEvent('notification',['type'=>'success','message'=>'Your message was sent successfully!']);
        Mail::send(new ContactFormMail($data));
        Mail::send(new AutoReplyMail($data));

       
    }
    public function render()
    {
        
        return view('livewire.contact-form');
    }

}
