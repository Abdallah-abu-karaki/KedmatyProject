<?php

namespace App\Http\Controllers;

use App\Item;
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

            $item = Item::where('user_id',Auth::id())->paginate(4);
            $number_item_add = Item::where('user_id',Auth::id())->count();
            $number_item_out_of_stock = 0;
            foreach($item as $item_finish){
                if($item_finish->count == 0){
                    $number_item_out_of_stock +=1;
                }
            }

            return view('vendors.index',compact(['profile','item','number_item_add','number_item_out_of_stock']));
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
