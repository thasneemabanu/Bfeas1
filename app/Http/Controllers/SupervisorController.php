<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }
}
