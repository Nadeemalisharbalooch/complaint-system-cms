<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use Illuminate\Http\Request;

class Complaintscontroller extends Controller
{
    
public function index(){
    $Complaints=Complain::all();
    return view('auth\totalcomplaints')->with('Complaints',$Complaints);


}

public function updatecomplainStatus(string $id)
{
    $Complain = Complain::find($id);

    if (!$Complain) {
        return "No matching record found";
    }


    if ( $Complain->Status == 0) {
   
        Complain::where('id', $id)->update(['status' => 1]);

    

    } elseif ( $Complain->Status == 1) {

        Complain::where('id', $id)->update(['status' => 2]);
       
      
    }

    return redirect()->back()->with('success', 'User status updated successfully.');
}  

// untilnotaction
public function untilnotaction(){
   
   $Complaints=Complain::where('Status',0)->get();

   return view('auth\totalcomplaints')->with('Complaints',$Complaints);
    
}

public function processing(){
   
    $Complaints=Complain::where('Status',1)->get();
 
    return view('auth\totalcomplaints')->with('Complaints',$Complaints);
     
 }  
 
 public function complete(){
   
    $Complaints=Complain::where('Status',2)->get();
 
    return view('auth\totalcomplaints')->with('Complaints',$Complaints);
     
 }  
 

}
