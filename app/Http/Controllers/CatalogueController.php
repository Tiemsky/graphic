<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index(){
        $catalogues = Catalogue::all();
        return view('catalogue.index', compact('catalogues'));
    }

    // public function afficheCover(){
    //     return view('catalogue.cover');
    // }

    // public function logo(){
    //     return view('catalogue.logo');
    // }

    // public function video(){
    //     return view('catalogue.video');
    // }

    // public function peoplePictures(){
    //     return view('catalogue.peoplePictures');
    // }

    // public function objectPictures(){
    //     return view('catalogue.objectPictures');
    // }

    // public function event(){
    //     return view('catalogue.event');
    // }

    // public function others(){
    //     return view('catalogue.others');
    // }

    public function catalogueNameManager($catalogue_name){
        $catalogue = Catalogue::latest()->with('portfolios')->where('slug', $catalogue_name)->first();
        return view('catalogue.show', compact('catalogue'));
    }
}
