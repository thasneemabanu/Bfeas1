
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
                    <h1>Employeemanagement - admin</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="/admin"> Home</a></li>
                        <li class="breadcrumb-item"><a href="/adminformone">Add Employee</a></li>
                        <li class="breadcrumb-item"><a href="/adminformone">Edit Employee</a></li>
                        
                        <li class="breadcrumb-item active">Admin-control-Panel</li> 
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
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="email" class="fxorm-label">Email</label>
      <input type="email" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>

    <div class="mb-3 mt-3">
      <label for="empname" class="fxorm-label">Employee Name</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="departmentid" class="fxorm-label">Department ID</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="departmentname" class="fxorm-label">Department Name</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="departmentname" class="fxorm-label">Job_Role</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="email" placeholder="Enter email" name="email">
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





