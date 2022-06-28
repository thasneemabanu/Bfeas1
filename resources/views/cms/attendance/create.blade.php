@extends('layouts.cms')

@section('content')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   <!-- <h1>Attendance Report</h1>   -->            
                </div>
                <div class="col-sm-6 ">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><b>Attendance Report</b></li>
                    <li class="breadcrumb-item active"><b></b></li>              
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>

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
      <label for="departmentid" class="fxorm-label">Department ID</label>
      <input type="text" class="form-control" style="margin-top:5px!important" id="departmentid" placeholder="Enter departmentID" name="departmentid">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="departmentid" class="fxorm-label">Date</label>
      <input type="date" class="form-control" style="margin-top:5px!important" id="date" placeholder="Enter date" name="date">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    <div class="mb-3 mt-3">
      <label for="timeofentry" class="fxorm-label">Entry Time</label>
      <input type="time" class="form-control" style="margin-top:5px!important" id="time_of_entry" placeholder="Enter date" name="time_of_entry">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
     <div class="mb-3 mt-3">
      <label for="time_of_exit" class="fxorm-label">Exit Time</label>
      <input type="time" class="form-control" style="margin-top:5px!important" id="time_of_exit" placeholder="Enter date" name="time_of_exit">
      <!--<div class="form-text">Must be a valid email address.</div>-->
    </div>
    
     <div class="col-sm-12 col-md-7">
         <a href="/add_attendance" class="btn btn-secondary buttons-copy buttons-html5"><span> Add </span></a></button>
     </div>
                      
    </div>                  
    </div>
    </div>                       
              </div> <!-- /end of card-body -->
        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
</div>

@endsection


