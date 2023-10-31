<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\customer;
use Session;

class editusercontroller extends Controller
{
    public function edit($id)
    {
        $details = customer::find($id)->toArray();
        return view('user.edit',compact('details'));
    }
    public function delete($id)
    {
        $details = customer::find($id);
        $details->delete();
        Session::flash('message','Customer Record Deleted Successfully');
        Session::flash('class','success');
        return back();
    }
}
