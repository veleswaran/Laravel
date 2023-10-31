<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\customer;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function start(){
        return view('user.user');
    }
    public function index(){
        $customer=customer::get();
        return view('user.userlist',compact('customer'));
    }
    public function signup(Request $request){
        $user       =new customer   ;
        $user->username=$request->name;
        $user->fullname=$request->fullname;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->is_active=$request->is_active;
        $user->save();
        return back();
    }
    // public function edit($id){
    //     $details=user::find($id);
    //     return view('user.user',compact('details'));
    // }
   public function update(Request $request){
    $user   =customer::find($request->id);
    $user->username=$request->name;
    $user->fullname=$request->fullname;
    $user->email=$request->email;
    $user->password=$request->password;
    $user->phone=$request->phone;
    $user->is_active=$request->is_active;
    $user->save();
   
   }

}
?>