<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function upFile(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $folder = "assets/img";
            $nameImage =  $file->getClientOriginalName();
            $file->move($folder, $nameImage);
        } else {
            echo ' Chưa có file ';
        }
    }
}
