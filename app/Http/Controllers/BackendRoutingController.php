<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class BackendRoutingController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function userManagement(){
        return view('backend.user-management');
    }

    public function accountSetting(){
        return view('backend.account-setting');
    }

    public function serviceSetting(){
        return view('backend.service-setting');
    }

    public function catalogueSetting(){
        return view('backend.catalogue-setting');
    }

    public function catalogueNameManager($catalogue_name){
        return view('backend.show-catalogue', compact('catalogue_name'));
    }
}
