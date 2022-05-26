
@extends('layouts.cms')

@section('content')

<!--<div class="content-wrapper" style="min-height: 2646.44px;">-->
<!--flex items below nevigation --> 
<!--<div class="d-flex p-1 bg-secondary text-white">-->



<div class="content-wrapper" style="min-height: 2646.44px;">
     <!--Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit employee details - admin</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="/admin"> <b>Home</b></a></li>
                        
                        <li class="breadcrumb-item active"><b>Admin-control-Panel</b></li> 
                    </ol>


           <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search Employee ID" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
<br>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
     
        <div class="container-fluid mt-3 w3-border w3-padding w3-round ws-grey">        
    <div class="mb-3 mt-3">
      <label for="empid" class="fxorm-label">Employee ID</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="empid" placeholder="Enter employeeID" name="employeeid">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="email" class="fxorm-label">Email</label>
      <input type="email" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="empname" class="fxorm-label">Employee first Name</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="fname" placeholder="Enter first name" name="firstname">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="empname" class="fxorm-label">Employee Middle Name</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="mname" placeholder="Enter middle name" name="middlename">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="empname" class="fxorm-label">Employee Last Name</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="lname" placeholder="Enter last name" name="lastname">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="contact" class="fxorm-label">Phone</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="phone" placeholder="Enter contact number" name="phonenumber" >
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="addressno" class="fxorm-label">Address No,</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="address_no" placeholder="Enter address" name="addressno">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="addressstreet" class="fxorm-label">Address Street</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="address_street" placeholder="Enter address" name="addressstreet">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="addresscity" class="fxorm-label">Address City</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="address_city" placeholder="Enter address" name="addresscity">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="departmentid" class="fxorm-label">Department ID</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter department ID" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>   
    <div class="mb-3 mt-3">
      <label for="departmentname" class="fxorm-label">Working department</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="departmentname" placeholder="Enter department" name="workdepartment">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div> 
    <div class="mb-3 mt-3">
      <label for="startdate" class="fxorm-label">Employed Date</label>
      <input type="date" class="form-control" style="margin-top:5px!important" id="employedfromdate" placeholder="Enter email" name="employedfrom">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div> 
    
    <button type="button" class="btn btn-primary mb-3">Add Employee</button>
    <button type="button" class="btn btn-primary mb-3">Edit Employee</button>
    
    
</div>



        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection





