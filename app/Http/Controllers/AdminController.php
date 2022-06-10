<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //function for home page of admin 
    public function index(){
        $data = [];
        return view('cms.admin.admin_panel')->with($data);
    }

    //function for leave-request (admin panel) 
    public function leavemanagementadmin(){
        $data = [];
        return view('cms.sub_forms.leavemanagement_admin')->with($data);
    }

     //leaves viewing sheet with dates (admin panel) 
    public function viewleaves($employee_id){
        $leaves = Leaves::where('employee_id',$employee_id)->get();
        $data['leaves'] = $leaves;
        $employee = User::find($employee_id);
        $data['employee'] = $employee;
        return view('cms.sub_forms.leavescount')->with($data);
    }

    //function for edit-employee (admin panel) 
    public function editemployeeadmin(){
        $data = [];
        return view('cms.sub_forms.editemployee')->with($data);
    }
    //function for display details(admin panel) 
    public function empmanagementadmin(){
    $data = [];
    return view('cms.sub_forms.viewemployee_admin')->with($data);  
}
  
    //function for add-employee (admin panel) 
    public function addemployeeadmin(){
        $data = [];
        return view('cms.sub_forms.addemployee')->with($data);
    }


}
