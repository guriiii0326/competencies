<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobClass extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'name' => 'required',
        'category' => 'required'
        );
}
