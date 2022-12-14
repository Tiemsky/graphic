<?php

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;




Route::get('/',['App\Http\Controllers\HomeController','home'])->name('home');
Route::get('contact-us',['App\Http\Controllers\HomeController','contact'])->name('contact-us');
Route::get('/register-retry', function(){
    Cookie::queue(Cookie::forget(strtolower(str_replace(' ', '_', config('app.name'))) . '_session'));
    return redirect('register');
 });


//Service controller
Route::prefix('services')->group(function () {
    Route::get('/',['App\Http\Controllers\ServiceController', 'services'])->name('services');
    Route::get('graphic-design',['App\Http\Controllers\ServiceController', 'graphicDesign'])->name('graphic-design');
    Route::get('digital-marketing',['App\Http\Controllers\ServiceController', 'digitalMarketing'])->name('digital-marketing');
    Route::get('web-mobile-development',['App\Http\Controllers\ServiceController', 'webMobileDev'])->name('web-mobile-dev');
    Route::get('event-management',['App\Http\Controllers\ServiceController', 'eventManagement'])->name('event-management');

});



//Portfolio
Route::prefix('catalogue')->group(function(){
    Route::get('',['App\Http\Controllers\CatalogueController', 'index'])->name('catalogue.index');
    Route::get('{catalogue_name}',['App\Http\Controllers\CatalogueController', 'catalogueNameManager'])->name('display-catalogue-front');
});

Route::middleware(['auth','verified'])->group(function(){
    Route::get('user-management',['App\Http\Controllers\BackendRoutingController','userManagement'])->name('user-management');
    Route::get('dashboard',['App\Http\Controllers\BackendRoutingController','dashboard'])->name('dashboard');
    Route::get('account-setting',['App\Http\Controllers\BackendRoutingController','accountSetting'])->name('account-setting');
    Route::get('service-setting',['App\Http\Controllers\BackendRoutingController','serviceSetting'])->name('service-setting');
    Route::get('catalogue-setting',['App\Http\Controllers\BackendRoutingController','catalogueSetting'])->name('catalogue-setting');
    Route::get('{catalogue_name} ',['App\Http\Controllers\BackendRoutingController','catalogueNameManager'])->name('catalogue_manager');
});





