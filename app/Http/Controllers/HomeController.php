<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $catalogues= Catalogue::latest()->with(['portfolios'])->where('front_page', 1)->first();
        return view('welcome',compact('catalogues'));
    }
    public function contact(){
        return view('contact');
    }
}
