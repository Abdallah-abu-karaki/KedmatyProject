<?php

namespace App\Http\Controllers;

use App\Http\Requests\addAdmainRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class admainController extends Controller
{
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
}
