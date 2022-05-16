@extends('layouts.cms')

@section('content')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin-Leaves </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/employee">Home</a></li>
                        <li class="breadcrumb-item"><a href="/employeeformtwo">Reports </a></li>
                        <li class="breadcrumb-item active">Employee-control-panel</li>   
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
                   <label for="comment">Reasons for the leave</label>
                   <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                 </div>
                 <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      <label for="email">Employee ID</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <label for="pwd">DepartmentID</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
      <label for="pwd">Number_Of_Days</label>
    </div>

                   <button type="submit" class="btn btn-primary">Request to Supervisor</button>
                   <button type="submit" class="btn btn-secondary">Cancel</button> <br><br><br>




                   <div class="mb-3 mt-3">
                   <label for="comment">Supervisor Approval</label>
                   <textarea disabled class="form-control" rows="5" id="comment" name="text"></textarea>
                 </div>              
 <div class="form-floating mb-3 mt-3">           
   <div class="input-group mb-3">
       <div class="input-group-text">
     <input disabled type="radio">
  </div>
     <input disabled type="text" class="form-control" placeholder="Reason for Approval">
</div>

<div class="input-group mb-3">
       <div class="input-group-text">
     <input disabled type="radio">
  </div>
     <input disabled type="text" class="form-control" placeholder="Reason for Rejection ">
</div>
</div> <br><br><br>








                 <div class="mb-3 mt-3">
                   <label for="comment">Director Approval</label>
                   <textarea disabled class="form-control" rows="5" id="comment" name="text"></textarea>
                 </div>              
 <div class="form-floating mb-3 mt-3">           
   <div class="input-group mb-3">
       <div class="input-group-text">
     <input disabled type="radio">
  </div>
     <input disabled type="text" class="form-control" placeholder="Reason for Approval">
</div>

<div class="input-group mb-3">
       <div class="input-group-text">
     <input disabled type="radio">
  </div>
     <input disabled type="text" class="form-control" placeholder="Reason for Rejection ">
</div>
</div> <br><br><br>










            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

@endsection