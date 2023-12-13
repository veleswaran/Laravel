<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;
use Illuminate\Support\Facades\Validator;


class imagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $image;
    public function __construct(){
        $this->image = new image();
    }
    public function index()
    {
        return $this->image->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $image=$request->file('images');
        $filename =time().".".$image->getClientOriginalExtension();
        $image->move('uploads/', $filename);
        image::create([
            'image' => $filename
        ]);
        return "image is uploaded successfully";
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
