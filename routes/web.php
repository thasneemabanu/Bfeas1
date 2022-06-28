<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {

    // Profile
    Route::get('/', 'ProfileController@profile')->name('Profile');
    Route::get('/home', 'ProfileController@profile')->name('Profile');
    Route::get('/profile', 'ProfileController@profile')->name('Profile');
    // Profile Actions
    Route::post('/profile/update', 'ProfileController@updateProfile');
    Route::post('/profile/updatedp', 'ProfileController@updateDP');
    Route::post('/profile/updatesign', 'ProfileController@updateSign');
    Route::post('/profile/updatepassword', 'ProfileController@updatePassword');

    // User Account
    Route::get('/users', 'UserController@users')->name('Users');
    Route::get('/user/view/{id}', 'UserController@view')->name('User');

    Route::post('/user/update', 'UserController@updateUser');
    Route::post('/user/updatedp', 'UserController@updateDP');
    Route::post('/user/updatesign', 'UserController@updateSign');
    Route::post('/user/resetpassword', 'UserController@resetPassword');
    Route::post('/user/addpermission', 'UserController@addPermission');
    Route::post('/user/rempermission', 'UserController@remPermission');
    Route::post('/user/activateuser', 'UserController@activateUser');


    
   
    
    // Admin Panel add employee
    Route::get('/adminaddemployee', 'AdminController@addemployeeadmin')->name('Admin Panel add employee');
    // Admin Panel edit employee
    Route::get('/admineditemployee', 'AdminController@editemployeeadmin')->name('Admin Panel edit employee');
     // Admin Panel view-employees 
    Route::get('/viewemployees', 'AdminController@empmanagementadmin')->name('Admin Panel emp management view employees');               //..done
    
    //Dashboards 
    // Admin Dashboard
     Route::get('/adminpanel', 'AdminController@admindashboard')->name('Admin Dashboard');    
     // Employee Dashboard
    Route::get('/employee', 'EmployeeController@emppanel')->name('Employee Dashboard');     
    // Director Dashboard
    Route::get('/director', 'DirectorController@directorhome')->name('Director Panel');  
    // supervisor Dashboard
    Route::get('/supervisor', 'SupervisorController@super')->name('supervisor Panel');                          
    
    // Leave-request for all users 
    Route::get('/adminleave', 'AdminController@leavemanagementadmin')->name('Admin Panel leave management');   
  
                                  
    // Director Panel leave permisions
    Route::get('/directorleavepermision', 'DirectorController@directorpermision')->name('Director Panel leave management');         

                                           

                                      
    // supervisor Panel leave permisions
    Route::get('/supervisorleavepermision', 'SupervisorController@superleave')->name('supervisor Panel leave management');    
    //leave request by all the employees
    Route::post('/leave/request/request', 'LeaveController@request_leave')->name('Leaves management page for requesting leave');                               
    //new leaves count page
    Route::get('/count', 'LeaveController@leavescount')->name('Leaves Count page');  
     
    
     //holiday list
    Route::get('/holiday', 'HolidaysController@holidayslist')->name('holidays list page');  
     //holiday crud  
    Route::get('/holidayaddedit', 'HolidaysController@holidayadd')->name('adding holidays page');  
     //Checking roles 
    Route::get('/createauths', 'Permision@createRoles')->name('');
      
    Route::get('/adminpanel', 'AdminController@admindashboard')->name('Admin Dashboard');
                              

    //Used blades for crud 
    Route::resource('/attendance', AttendanceController::class);

    Route::resource('/employees', EmployeeController::class);
    
});







 // employee Panel form 1
 //Route::get('/employeeleaverequest', 'EmployeeController@leavemanagementemployee')->name('Employee Panel leave management'); //..done

     //Employee panal form 2
    // Route::get('/employeeviewreport', 'EmployeeController@reportsemployee')->name('Employee Panel report management');        //..done 
    //
    //Route::get('/attendance/view/{employee_id}', ' AttendanceController@attendancemenu')->name('Attendance');

    
    // Admin Panel attendance report management
    //#Route::get('/attendancereport', 'AttendanceController@reportmanagementadmin')->name('Admin Panel attendance management'); 
    
   // Admin Panel attendance report management
    //#Route::get('/attendancereport', 'AttendanceController@reportmanagementadmin')->name('Admin Panel attendance management');  
         

/*Route::middleware('auth:api')->group( function () {
    Route::resource('attendance', AttendanceController::class);
});*/

