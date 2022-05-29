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
                        <li class="breadcrumb-item active"><b>/Taken Leaves</b></li>
                    </ol>
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
        <div class="container"> 
<form>
<table class="table table-bordered table-striped">
    <tbody id="myTable">
      <tr>
        <td><label for="staticEmail" class="col-sm-2 col-form-label">Employee ID</label></td> 
      </tr>
     </tbody>
</table>

      <div class="form-group">
                  <label>Select a Month</label>
                  <div class="input-group">
                     <input type="month" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>

          



<!--
    <div class="container-fluid mt-3">    start of mini container
<div class="bg-image" style=background-image:url('/img/light7.jpg') ;>
  <div class="row">                   //start of mini row
    <div class="col p-3 text-black">  //can write column name here
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header bg-secondary"><b>Worked Days</b></div>
          <div class="card-body">
          <h5 class="card-title"></h5> 
          <p class="card-text">count</p></div>        
 </div>  
</div>
<div class="col p-3 text-black">      //can write column name here 
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
      <div class="card-header bg-secondary "><b>Available leaves</b></div>
      <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">count</p>
   </div>
  </div>
</div> 

<div class="col p-3 text-white"><b> Date </b>
 <div class="container mt-3">
  <div class="btn-group btn-group-sm">
    <div class="container overflow-hidden">
      <div class="row gx-2">
       <div class="col">
       <div class="p-1"> <button type="button" class="btn btn-secondary">15</button></div>
      </div>

 <div class="col">
    <div class="p-1"><button type="button" class="btn btn-primary">May</button></div>     
 </div>
 <div class="col">
   <div class="p-1"> <button type="button" class="btn btn-secondary">2022</button> </div>     
 </div>
</div></div></div></div>
</div>
-->

</div>
</div> <!--// end of mini container-->  


<ul class="list-group">
<li class="list-group-item  text-white bg-secondary"><b>Total-Leaves</b></li>
<li class="list-group-item d-flex justify-content-between align-items-center">
    Annual-Leaves
    <span class="badge badge-primary badge-pill ">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Compensatory-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Marriage-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center ">
   Bereavement-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center ">
   Medical-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center ">
  Vacation-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center ">
  Maternity-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li> <li class="list-group-item d-flex justify-content-between align-items-center ">
  Paternity-Leaves
    <span class="badge badge-primary badge-pill">#</span>
  </li>  
</ul>
<br>


 <!--prevous page button , onclick="stepper.previous()"-->                           
<button class="btn btn-secondary" ><a href="/employeeformtwo">Previous</a></button>


</div><!--full container close -->

        </div><!-- /end of container-fluid -->
    </section>
    
</div><!-- /end of main content -->
<br><br>
@endsection