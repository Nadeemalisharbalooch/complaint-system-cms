<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mymail;

class Mailcontroller extends Controller
{
   public function index(){
    $user='nadeemkhanshar@50gmail.com';
    $emaildata = [
        'title' => 'Mail from me',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus doloremque vero consequatur cupiditate nisi odio.'
    ];     
    Mail::to($user)->send(new Mymail($emaildata));
   return "yes email send successfully";
   }
}
