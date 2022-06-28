<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use DateTime;
use DatePeriod;
use Session;
use Redirect;


class AttendanceController extends Controller
{
    // function for attendance-report (admin panel) 
   /* public function reportmanagementadmin(){
        $data = [];
        return view('cms.sub_forms.attendance_reports')->with($data);
    }*/
    


 //public function attendancemenu(){                                           //leaves count 
                                                                               // Getting logged in user / Leave Requesting Employee
      //  $logged_in_user = Auth::user();
      //  $attendances = Attendances::where('employee_id',$logged_in_user->id)->get();
      //  $data['attendances'] = $attendances;
      //  $employee = User::find($logged_in_user->id);
      //  $data['employee'] = $employee;
      //  return view('cms.sub_forms.attendance_reports')->with($data);
 
// }

//public function attendancemenu(){ 
//$attendance = Attendance :: all()->toArray();
//return view('cms.sub_forms.attendance_reports', compact ('attendance'));
//}

}
