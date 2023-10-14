<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;

class propertyController extends Controller
{
    public function index(){
        return view('property');
    }

    public function select(){
        $images=property::get();
        return view('gallary',compact('images'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images', $fileName, 'public');

            $imageModel = new property;
            $imageModel->property_name = $request->property;
            $imageModel->image = $fileName;
            $imageModel->user_id = auth()->user()->id;
            $imageModel->save();

            return redirect('/show');
        }

        return 'No image was uploaded.';
    }
}
