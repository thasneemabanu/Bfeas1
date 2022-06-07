<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

    // Admin Panel
    Route::get('/adminpanel', 'AdminController@index')->name('Admin Panel');                                //..done

    // Admin Panel manage-employees (Adding and editing)
    Route::get('/adminmanageemployee', 'AdminController@empmanagementadmin')->name('Admin Panel emp management view employees');               //..done

    // Admin Panel Leave-request
    Route::get('/adminleave', 'AdminController@leavemanagementadmin')->name('Admin Panel leave management');             //..done

    // Admin Panel attendance report management
    Route::get('/adminattendancereport', 'AttendanceController@reportmanagementadmin')->name('Admin Panel attendance management');  
         
    // Admin Panel add employee
    Route::get('/adminaddemployee', 'AdminController@addemployeeadmin')->name('Admin Panel add employee');

    // Admin Panel edit employee
    Route::get('/admineditemployee', 'AdminController@editemployeeadmin')->name('Admin Panel edit employee');




    // Director Panel home
    Route::get('/director', 'DirectorController@directorhome')->name('Director Panel');                                  //..done
    // Director Panel leave permisions
    Route::get('/directorleavepermision', 'DirectorController@directorpermision')->name('Director Panel leave management');          //..done

 
    // Employee Panal home
    Route::get('/employee', 'EmployeeController@emppanel')->name('Employee Panel');                                        //..done
    // employee Panel form 1
    Route::get('/employeeleaverequest', 'EmployeeController@leavemanagementemployee')->name('Employee Panel leave management'); //..done
    //Employee panal form 2
    Route::get('/employeeviewreport', 'EmployeeController@reportsemployee')->name('Employee Panel report management');        //..done 


    // supervisor Panel
    Route::get('/supervisor', 'SupervisorController@super')->name('supervisor Panel');                                   //...done   
    //supervisor form1
    Route::get('/supervisorleavepermision', 'SupervisorController@superleave')->name('supervisor Panel leave management');     //...done

    //leave request 
    Route::post('/leave/request/request', 'LeaveController@request_leave')->name('');                //done                
    //new leaves count page
    Route::get('/count', 'LeaveController@leavescount')->name('Leaves Count page');  
            
   
});

