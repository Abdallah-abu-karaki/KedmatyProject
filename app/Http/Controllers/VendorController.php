<?php

namespace App\Http\Controllers;

use App\Http\Requests\addItemRequest;
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
public function add_product(addItemRequest $request){
    $file_extension = $request->image->getClientOriginalExtension();
    $file_name = time().'.'.$file_extension;
    $path = "images/vendorImage/addItemProductImage";
    $request->image->move($path,$file_name);

    Item::create([
        'description'=> $request->description,
        'name' => $request->name,
        'price' =>$request->price ,
        'count'=>$request->count,
        'image' =>$file_name,
        'like'=>1,
        'dislike'=>2,
        'user_id'=>Auth::id(),

     ]);

     return redirect()->route('addition');
}

    public function deleteItem($id){

     $item = Item::find($id);
     $item->delete();
     return redirect()->route('home');
}

}
