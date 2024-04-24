<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Complain;
Use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mymail;
class Complaint extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Email contents
        $emaildata = [
            'title' => 'Mail from me',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloremque vero consequatur cupiditate nisi odio.'
        ]; 

        $checkuser=auth()->user()->Status;
        if($checkuser==3){
            return redirect()->back()->with('error', 'Your account has been blocked kindly contact to admin.');
        }
      
        else{
           
        
       $request->validate([
    'communication' => 'required',
    'phone' => 'required',
    'designation' => 'required|string',
        'communicationmedium' => 'required',
        'description' => 'required',
        'department'=> 'required',

]);
         $mail_send_TO=$request->mail;
         $loggedInUserId = Auth()->user();
         $create=Complain::create([
            'user_id'=>$loggedInUserId->id,
            'categorycomplains_id'=>$request->communication,
            'name'=>$loggedInUserId->name,
            'email'=>$loggedInUserId->email,
            'phone'=>$request->phone,
            'id&department'=>$request->department,
            'desgination'=>$request->designation,
            'communication_medium'=>$request->communicationmedium,
            'descriptions'=>$request->description,
              ]);
              if($mail_send_TO==1)
              {    
                $user='nadeemkhanshar50@gmail.com';
                Mail::to($user)->send(new Mymail($emaildata));
              
              }
              elseif($mail_send_TO==2){
              return "send Email to Register";
              }
              elseif($mail_send_TO==3){
                return "send Email to HOD ";

              }
              return redirect()->back()->with('message', 'Your compaint has been successfuly save.');
    }
}      

    public function updateuserStatus(string $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return "No matching record found";
        }

        if ($user->Status == 3) {
            User::where('id', $id)->update(['status' => 0]);

        } elseif ($user->Status == 0) {
            User::where('id', $id)->update(['status' => 3]);
          
        }
    
        return redirect()->back()->with('success', 'User status updated successfully.');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function changepassword(){
        return view('auth\channgepassword');
        
    }
    public function passsubmit(){
        return redirect()->back()->with('success', 'sorry you cannot change password contact to admin or developer.');
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 
    }
}
