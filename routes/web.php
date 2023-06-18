<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreImageController;
use App\Http\Controllers\StoreUnitesController;
use App\Models\Unites;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('residential',function(){
    $unites=Unites::where('type','residential')->get();

    return view('residential',compact('unites'));
});

Route::get('commercial',function(){
    $unites=Unites::where('type','commercial')->get();

    return view('commercial',compact('unites'));
});

Route::get('P-Details/{id}',function($id){
    $unite=Unites::findOrFail($id);

    return view('P-Details',compact('unite'));
});

Route::get('contact_us',function(){
    return view('Contact_Us');
});
Route::get('units',function(){
    return view('units');
});

Route::get('add',function(){
    return view('add');
});

Route::get('delete',function(){
    return view('delete');
});

Route::get('client',function(){
    return view('client');
});

Route::post('contact_us',ContactUsController::class)->name('contact_us');

Route::get('/طلب حجز', function(){
    if(Auth::user()){
        return view('signup');
    }
    return view('signup');
});


Route::get('طلب الحجز', function(){
    if(Auth::user()){
        return view('log');
    }
    return view('log');
})->name('lo');

Route::get('upload-image',function(){
    return view('uploadimage');
});

Route::post('store_image',StoreImageController::class)->name('store_image');

Route::get('dashboard',function(){
    $unites=Unites::get();
    return view('dash2.indext',compact('unites'));
});


Route::get('unitPage',function(){
    return view('dash2.units');
});
Route::get('user',function(){
    return view('dash2.user');
});


Route::get('deletunit',function(){
    return view('dash2.deletunit');
});

Route::get('deleteUnit/{id}',[StoreUnitesController::class,'delete'])->name('delete_unit');

Route::resource('unit',StoreUnitesController::class)->middleware('auth');


