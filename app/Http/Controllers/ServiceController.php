<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = 'services';
    public function services(){
        return view($this->services.'.services');
    }
    public function webMobileDev(){
        return view($this->services.'.web-mobile-dev');
    }

    public function digitalMarketing(){
        return view($this->services.'.digital-marketing');
    }

    public function graphicDesign(){
        return view($this->services.'.graphic-design');
    }

    public function eventManagement(){
        return view($this->services.'.event-management');
    }
}
