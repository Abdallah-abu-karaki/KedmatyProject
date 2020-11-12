<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function check()
    {

        $user = Auth::user()->status;

        if($user == 1){
            return view('admin.index');
        }else{

            $profile = User::with(['Profile'=>function($q){
                $q->select('complete_profile','user_id');
            }])->find(Auth::id());

            return view('vendors.index',compact('profile'));
        }


    }

    public function contact(){
        return view('userSide.contact');
    }
    public function home_user(){
        return view('welcome');
    }
    public function about_as(){
        return view('userSide.aboutAs');
    }












}
