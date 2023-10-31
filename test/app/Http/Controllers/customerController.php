<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function select(){
        $list = customer::get();
        return view('listuser',compact('list'));
    }
    public function save(Request $request){
        $table = new customer();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->phone = $request->phone;
        $table->save();
        return back();   
    }
    public function delete1($id){
        $table = customer::find($id);
        $table->delete();
        return back();
    }
    
}
?>