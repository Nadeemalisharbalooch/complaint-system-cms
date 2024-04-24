<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Complaint;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Complaintscontroller;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\Mycompalintcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('index',function(){
return view('site\index');
});

Route::get('form',function(){
    return view('auth\category');  
    });
    // Route::get('mycompalin',function(){
    //    return view('mycomplain');
    //     });      
      
    Route::get('mycomplain',[Mycompalintcontroller::class,'index']);

        Route::get('createcategory',function() {
   return view('auth\createcategory');    
        });        
        // Route::get('mycompain',function() {
        //     return view('auth\dashboard');
        //          });    

        

  // category Controllers
  Route::get('createcategory',[Categorycontroller::class,'create'])->name('create');
  Route::get('showcategory',[Categorycontroller::class,'show'])->name('show');
  Route::get('insertcategory',[Categorycontroller::class,'store'])->name('store');
  Route::get('singlecategory/{id}',[Categorycontroller::class,'singlecomplaint'])->name('singlecomplaint');






Route::get('changepassword',[Complaint::class,'changepassword'])->name('changepassword');
Route::get('passsubmit',[Complaint::class,'passsubmit'])->name('passsubmit');
Route::get('index',[Complaint::class,'index'])->name('index');
Route::get('createcomplain',[Complaint::class,'store'])->name('createcomplain');
Route::get('updateuserStatus/{id}',[Complaint::class,'updateuserStatus'])->name('updateuserStatus');



// Admin controllers 
Route::get('admindashboard',[Admincontroller::class,'index']);


// User controllers
Route::get('showuser',[Usercontroller::class,'index']);
Route::get('deleteuser/{id}',[Usercontroller::class,'destroy']);

 
// complain controller
Route::get('totalcomplain',[Complaintscontroller::class,'index']);
Route::get('updatecomplainStatus/{id}',[Complaintscontroller::class,'updatecomplainStatus'])->name('updatecomplainStatus');
Route::get('untilnotaction',[Complaintscontroller::class,'untilnotaction'])->name('untilnotaction');
Route::get('processing',[Complaintscontroller::class,'processing'])->name('processing');  
Route::get('complete',[Complaintscontroller::class,'complete'])->name('complete'); 
// category controller
Route::get('showcategory',[Categorycontroller::class,'index']);
Route::get('mail',[Mailcontroller::class,'index']);