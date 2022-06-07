<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // function for attendance-report (admin panel) 
    public function reportmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.attendance_reports_admin')->with($data);
    }

}
