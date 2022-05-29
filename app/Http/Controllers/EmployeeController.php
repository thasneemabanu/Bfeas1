<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }
 
    public function emppanel(){
        $data = [];
        return view('cms.employee.employee_panel')->with($data);
    }

    public function leavemanagementemployee(){   //userdefined function //
        $data = [];
        return view('cms.sub_forms.leavemanagement_employee')->with($data);
    }

    public function reportsemployee(){   //userdefined function //
        $data = [];
        return view('cms.sub_forms.attendance_reports_employee')->with($data);
    }

    public function totalleavesemployee(){    //total leaves taken by employee-panel
        $data = [];
        return view('cms.sub_forms.total_leaves_taken_emppanel')->with($data);
    }

  
}

