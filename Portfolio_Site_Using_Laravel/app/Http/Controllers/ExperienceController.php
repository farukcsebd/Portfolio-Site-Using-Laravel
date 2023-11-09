<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $data=json_decode(file_get_contents(storage_path('data/experiences.json')));
        // dd($data);
        // return view('experiences',compact('data',$data));
        return view('experiences')->with('experiences',$data);
    }
}
