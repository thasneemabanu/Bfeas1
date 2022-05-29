<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DateTime;
use DateInterval;
use DatePeriod;
use App\Models\Leaves;
use Session;
use Redirect;

class LeaveController extends Controller
{
    public function request_leave(Request $request){
        // Getting logged in user / Leave Requesting Employee
        $logged_in_user = Auth::user();

        // Validating the leave request
        $request->validate([
            'reason'=>'required',
            'from_date'=>'required',
            'to_date'=>'required',
            'leave_type'=>'required',
            
        ]);

        // Looping Through dates
        $from_date = new DateTime($request->from_date);
        $to_date = new DateTime($request->to_date);
        
        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($from_date, $interval, $to_date);
        
        // Creating Leave Requests
        foreach ($period as $dt){
            $leave = new Leaves;
            $leave->date = $dt;
            $leave->employee_id = $logged_in_user->id;
            $leave->requested_on = NOW();
            $leave->department_id= $logged_in_user->department_id;
            $leave->leave_type=$request->leave_type;
            $leave->leave_status='Requested';
            $leave->leave_reason=$request->reason;
            $leave->save();
        }
         Session::flash('success','Leave requested to supervisor');
         return Redirect::back();

    }       //end of function request_leave

//total leaves taken page controller 
    public function total_leave(){
        $data = [];
        return view('cms.sub_forms.total_leaves_taken')->with($data);
    }


}
