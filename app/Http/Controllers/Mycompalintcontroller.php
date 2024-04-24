<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Mycompalintcontroller extends Controller
{
    public function index(){
       $user=auth()->user()->id;
        $complaint=Complain::where('user_id',$user)->get();
        return view('mycomplain')->with('complaint',$complaint);
    }
}
