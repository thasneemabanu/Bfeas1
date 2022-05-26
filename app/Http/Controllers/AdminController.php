<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }
//view of employee details
    public function empmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.viewemployeemanagement_admin')->with($data);
        
    }

//leave request through admin panel
    public function leavemanagementadmin(){
        $data = [];
        return view('cms.sub_forms.leavemanagement_admin')->with($data);
    }
//edit-employee through admin panel
    public function editemployeeadmin(){
        $data = [];
        return view('cms.sub_forms.editemployee')->with($data);
    }

  

//add-employee through admin panel
    public function addemployeeadmin(){
        $data = [];
        return view('cms.sub_forms.addemployee')->with($data);
    }

// attendance-report through admin panel
    public function reportmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.attendance_reports_admin')->with($data);
    }

   
}
