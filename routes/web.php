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
    Route::get('/admin', 'AdminController@index')->name('Admin Panel');                                //..done

    // Admin Panel employee management
 Route::get('/adminformone', 'AdminController@empmanagementadmin')->name('Admin Panel emp management');               //..done

   // Admin Panel Leave management
 Route::get('/adminformtwo', 'AdminController@leavemanagementadmin')->name('Admin Panel leave management');             //..done

    // Admin Panel report management
 Route::get('/adminformthree', 'AdminController@reportmanagementadmin')->name('Admin Panel report management');          //..done




    // Director Panel
 Route::get('/director', 'DirectorController@leavepermision')->name('Director Panel');                                  //..done
 
   // Director Panel form 1
 Route::get('/directorformone', 'DirectorController@leavemanagement')->name('Director Panel leave management');          //..done

 
   // Employee Panal
 Route::get('/employee', 'EmployeeController@emppanel')->name('Employee Panel');                                        //..done
   // employee Panel form 1
 Route::get('/employeeformone', 'EmployeeController@leavemanagementemployee')->name('Employee Panel leave management'); //..done
   //Employee panal form 2
 Route::get('/employeeformtwo', 'EmployeeController@reportsemployee')->name('Employee Panel report management');        //..done 

  // supervisor Panel
 Route::get('/supervisor', 'SupervisorController@super')->name('supervisor Panel');                                   //...done   
  //supervisor form1
 Route::get('/supervisorformone', 'SupervisorController@superleave')->name('supervisor Panel leave management');     //...done

});

