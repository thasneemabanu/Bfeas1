<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidaysController extends Controller
{

     public function holidayslist(){    //totalholidays
        $data = [];
        return view('cms.sub_forms.holidays')->with($data);
    }
    //
     public function holidayadd(){
        $data = [];
        return view('cms.sub_forms.addholiday')->with($data);
    }

}
