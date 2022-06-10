@extends('layouts.cms')

@section('content')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                </div>
                <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><b>Leave Permissions</b></li>                     
                        <li class="breadcrumb-item active"><b>Supervisor-control-Panel</b></li> 
                        <!-- options for approval and cancelling of leaves -->
                        
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

        <form action="/action_page.php">
                 <div class="mb-3 mt-3">
                   <label for="comment">Leave request from Employee/Admin </label>
                   <textarea disabled class="form-control" rows="5" id="comment" name="text"></textarea>
                 </div>
                 <div class="form-floating mb-3 mt-3">
              <input disabled type="date" class="form-control" id="from_date" name="from_date" max="" min="">
              <label for="from_date">Leave from</label>
          </div>
          <div class="form-floating mt-3 mb-3">
              <input disabled type="date" class="form-control" id="to_date"  name="to_date">
              <label for="to_date">Leave To</label>
          </div>
   
    <br>
    <br>      
                   <div class="mb-3 mt-3">
                   <label for="comment">Supervisor Approval</label>
                   <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                 </div>
                               
 <div class="form-floating mb-3 mt-3">           
   <div class="input-group mb-3">
       <div class="input-group-text">
     <input type="radio">
  </div>
     <input type="text" class="form-control" placeholder="Reason for Approval">
</div>

<div class="input-group mb-3">
       <div class="input-group-text">
     <input type="radio">
  </div>
     <input type="text" class="form-control" placeholder="Reason for Rejection ">
</div>
<button type="submit" class="btn btn-primary">Submit</button>    <!-- has to be disabled in employee leave or admin leave and director -->                                                                      
</div></br><br><br>


</form><!--Form ends-->

<!--
<div class="form-check">
      <input type="radio" class="form-check-input" disabled>
      <label class="form-check-label">Option 3</label>
    </div>

-->            
 <!---------------------------------------------------------->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection

