<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\Categorycomplain;
Use App\Models\Complain;
Use App\Models\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $user=auth()->user();
$category=Categorycomplain::all();
$users=user::all();
$allcomplain=Complain::all();
$untilnotaction=Complain::where('Status',0)->get();
$complete=Complain::where('Status',2)->get();
$processing=Complain::where('Status',1)->get();

        $Status=$user->Status;
         if($Status==1){
            return view('auth\dashboard')->with('category',$category)->with('users',$users)->with('untilnotaction',$untilnotaction)
           ->with('complete',$complete)->with('processing',$processing)->with('allcomplain',$allcomplain);
         }
         else{
      $category=Categorycomplain::all();
            return view('site\index')->with('category',$category);
         }
      
    }
}
