<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $data=json_decode(file_get_contents(storage_path('data/projects.json')));
        // dd($data);
        return view('projects')->with('projects',$data);

    }


    public function show(string $id){
        $data=collect(json_decode(file_get_contents(storage_path('data/projects.json'))));
        $project=$data->where('id', $id)->first();
        // dd($project);
        return view('projects_show',compact('project'));
    }
}
