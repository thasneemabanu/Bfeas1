
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
                    <h1></h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><b>Add-Holiday</b></li>                
                  <li class="breadcrumb-item active">Holiday Lists</li> 
                    </ol>
<!--
           <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search Employee ID" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
-->
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
      <label for="date" class="fxorm-label">Holiday falls Date</label>
      <input type="date" class="form-control" style="margin-top:5px!important" id="holiday_fall_date" placeholder="Enter date" name="holiday_fall_date">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="description" class="fxorm-label">Description </label>
      <input type="description" class="form-control" style="margin-top:5px!important" id="holiday_description" placeholder="Holiday name" name="holiday_description">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div><br>
    <button type="button" class="btn btn-outline-success">Save</button></td>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection





