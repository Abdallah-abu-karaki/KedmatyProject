<?php

namespace App\Http\Controllers;

use App\Http\Requests\addAdmainRequest;
use App\Item;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class admainController extends Controller
{

    /***************************start manage admain controller *************************/

   public function manage_admain(){
        $admains = User::where('status',1)->paginate(4);
       return view('admin.manage_admain',compact('admains'));
   }
   public function add_admain(){
       return view('admin.add_admain');
   }
   public function insert_admain(Request $request){
       User::create([
           'name' => $request['name'],
           'email' => $request['email'],
           'password' => Hash::make($request['password']),
           'status'=>1,
       ]);

       return redirect()->route('manage_admain');
   }
   public function delete_admain($id){
       $admain = User::find($id);
       $admain->delete();
       return redirect()->route('manage_admain');
   }

   public function edit_admain($id){
       $admain = User::find($id);
       return view('admin.edit_admain',compact('admain'));
   }
   public function update_admain(Request $request ,$id){
       $admain = User::find($id);

       $doneUpdate = $admain->update([
           'name' => $request['name'],
           'email' => $request['email'],
       ]);
       if($doneUpdate){
           return redirect()->route('manage_admain');
       }
   }
    /***************************end manage admain controller *************************/

   /***************************start manage vendor controller *************************/


    public function manage_vendor(){
       /* $vendors = User::with('profile')->where('status',0)->get();*/
        $vendors = User::with(['profile'=>function($q){
            $q->select('location','number','image','user_id');
        }])->where('status',0)->get();


        return view('admin.manage_vendor',compact('vendors'));
    }

    public function delete_vendor($id){
        $vendor = User::find($id);
        $vendor->delete();
        return redirect()->route('manage_vendor');
    }




    /**************************end manage vendor controller **************************/

    /**************************start manage item controller **************************/
    public function manage_item(){
        $items = User::with(['profile'])->where('status',0)->get();

        return view('admin.manage_item',compact('items'));
    }
    public function show_item_vendor($id){

        $items = Item::where('user_id',$id)->paginate(5);

        return view('admin.show_item_vendor',compact('items'));
    }
    /**************************end manage item controller **************************/

}
