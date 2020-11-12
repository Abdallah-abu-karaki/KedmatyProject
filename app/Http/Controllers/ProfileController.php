<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProfileRequest;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create_profile(){

       $profile = User::with(['Profile'=>function($q){
                $q->select('complete_profile','user_id');
            }])->find(Auth::id());


     return view('vendors.create_profile',compact('profile'));
    }
    public function my_profile(){
        $profile = User::with(['Profile'=>function($q){
            $q->select('complete_profile','user_id');
        }])->find(Auth::id());

        return view('vendors.my_profile',compact('profile'));
    }
    public function create_profile_vendor(createProfileRequest $request){

        Profile::create([
            'image'=>"image",
           'description' =>$request->description,
            'location'=>$request->location,
            'number'=>$request->number,
            'user_id'=>Auth::id(),
            'complete_profile'=>1,
        ]);

       return redirect()->route('home');
    }
    public function my_profile_info(){
        $profile = User::with(['Profile'=>function($q){
            $q->select('complete_profile','user_id');
        }])->find(Auth::id());

        $info_profile = User::with('Profile')->find(Auth::id());
        return view('vendors.my_profile',compact(['profile','info_profile']));

    }
    public function delete_profile($id){
      $profile = Profile::find($id);
      $profile->delete();
      return redirect()->route('home');
    }

    public function edit_profile(){

        $profile = User::with(['Profile'=>function($q){
            $q->select('complete_profile','user_id');
        }])->find(Auth::id());


        return view('vendors.edit_profile',compact('profile'));
    }
}
