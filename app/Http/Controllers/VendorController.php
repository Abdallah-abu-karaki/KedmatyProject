<?php

namespace App\Http\Controllers;

use App\Item;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
 public function addition(){
     $profile = User::with(['Profile'=>function($q){
         $q->select('complete_profile','user_id');
     }])->find(Auth::id());
     return view('vendors.addition',compact('profile'));
}
public function add_product(Request $request){
     Item::create([
        'description'=> $request->description,
        'name' => $request->name,
        'price' =>$request->price ,
        'count'=>$request->count,
        'image' =>"abood",
        'like'=>1,
        'dislike'=>2,
        'user_id'=>Auth::id(),

     ]);

     return redirect()->route('addition');
}
}
