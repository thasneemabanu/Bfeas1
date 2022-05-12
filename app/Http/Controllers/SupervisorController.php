<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }

    public function super(){
        $data = [];
        return view('cms.Supervisor.supervisor_panel')->with($data);
    }

    public function superleave(){
        $data = [];
        return view('cms.sub_forms.leavemanagement_supervisor')->with($data);
    }

}
