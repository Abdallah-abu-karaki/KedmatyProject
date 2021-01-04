<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;

class mailController extends Controller
{
   public function send( Request $request){

   $this->validate($request,[
        'name' => 'required',
        'email' =>'required|email',
        'phone' => 'required',
        'message' =>'required',
   ]);

    $data = array(
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'message'=>$request->message,

    );

     Mail::to('abdallahabukaraki10@gmail.com')->send(new sendMail($data));
     toast('send email successfully','success');
     return back();
   }
}
