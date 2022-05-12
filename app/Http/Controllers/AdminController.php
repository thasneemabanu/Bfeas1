<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }

    public function empmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.employeemanagement_admin')->with($data);
    }

    public function reportmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.reports_admin')->with($data);
    }

    public function leavemanagementadmin(){
        $data = [];
        return view('cms.sub_forms.leavemanagement_admin')->with($data);
    }
}
