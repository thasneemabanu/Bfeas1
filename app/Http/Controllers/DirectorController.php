<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorController extends Controller
{
     public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }
//copy above code and paste down for the creting functions //

    public function leavepermision(){
        $data = [];
        return view('cms.Director.director_panel')->with($data);
    }
    public function leavemanagement(){
        $data = [];
        return view('cms.sub_forms.leavemanagement_director')->with($data);
    }

}
