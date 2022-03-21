<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function update(){
        return view('skill.update');
    }
    
    public function check(){
        return view('skill.check');
    }
    
    public function index(){
        return view('skill.index');
    }
}
