<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\JobClass;

class SkillController extends Controller
{
    //
    public function create(Request $request){
        $jobclass = new JobClass;
        $form = $request->all();
        
        unset($form['_token']);
        
        $jobclass->fill($form);
        $jobclass->save();
        
        return view('admin/skill/create');
    }
    
    public function add(){
        return view('admin/skill/create');
    }
    
    public function make(){
        return view('admin/skill/make');
    }
    
    public function movie(){
        return view('admin/skill/movie');
    }
}
