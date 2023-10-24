<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $usertype=Auth()->User()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }else if($usertype=='admin'){   
                return view('adminhome');
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function makeAdmin($id){
        $admin = User::find($id);
        $admin->usertype="admin";
        $admin->save();
        return "you will change admin";
    }
    public function select(){
        $name=User::get();
        return $name;
    }
    public function post(){
        return view('post');
    }
}
