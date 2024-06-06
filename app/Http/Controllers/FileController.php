<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function uploadFile(Request $request){
        echo "<pre>";
        // echo print_r($request->all());
        echo $request->file('image')->store('uploads');
    }
    // public function uploadFile(Request $request)
    // {
    //     // Validate the file
    //     $request->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     // Check if the file is valid
    //     if ($request->file('image')->isValid()) {
    //         // Store the file
    //         $path = $request->file('image')->store('uploads/images', 'public');

    //         // Save the image path in the database
    //         $image = new Image();
    //         $image->path = $path;
    //         $image->save();

    //         // // Get the URL of the image
    //         // $url = Storage::url($path);

    //         // return back()->with('success', 'File uploaded successfully')->with('file', $url);
    //     }

    //     // If the file is not valid, return an error
    //     return back()->withErrors(['file' => 'Invalid file upload']);
    // }
}
