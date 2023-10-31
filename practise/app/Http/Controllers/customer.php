<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Customer;

class customers extends Controller
{
    public function index(){
        return view('create');
    }
    public function save(Request $request){
        $customer     = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->descrition = $request->description;
        $customer->mobile_number = $request->mobile;
        $customer->save();

    return $customer;
    }
}
?>