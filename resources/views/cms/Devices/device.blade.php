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
                   <li class="breadcrumb-item"><b>Add-Device</b></li>                
                  <li class="breadcrumb-item active">Devices Lists</li> 
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
      <label for="id" class="fxorm-label">Device ID</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="id" placeholder="Device id" name="id">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="description" class="fxorm-label">Device type </label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="Device_type" placeholder="Device_type" name="Device_type">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div><br>
    <div class="mb-3 mt-3">
      <label for="Device_name" class="fxorm-label">Device_name </label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="Device_name" placeholder="Device_name" name="Device_name">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div><br>
    <div class="mb-3 mt-3">
      <label for="Device_status" class="fxorm-label">Device_status </label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="Device_status" placeholder="Device_status" name="Device_status">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div><br>
    <button type="button" class="btn btn-outline-success">Save</button></td>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection