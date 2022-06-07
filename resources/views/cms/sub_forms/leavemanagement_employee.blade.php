@extends('layouts.cms')

@section('content')
<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee-Leaves Management</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="/employee"><b>Home</b></a></li>
                       <li class="breadcrumb-item active"><b>Employee-control-panel</b></li>   
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="/leave/request/request" method="POST">
          @csrf
        <div class="mb-3 mt-3">
                 <label for="comment">Leave Type</label>
                 <select class="form-select" name="leave_type" id="leave_type" aria-label="Default select example">
                  <option selected>Open this select menu to choose leave type </option>
                  <option value="maternity">Annual </option>
                  <option value="maternity">Casual</option>
                  <option value="maternity">Compensatory Off</option>
                  <option value="maternity">Marriage</option>
                  <option value="maternity">Bereavement Leave.</option>
                  <option value="medical">Medical</option>
                  <option value="vacation">Vacation</option>
                  <option value="maternity">Maternity</option>
                  <option value="maternity">Paternity Leave</option>
                </select>
          </div>

          <div class="mb-3 mt-3">
                 <label for="comment">Reasons for the leave</label>
                 <textarea class="form-control" rows="5" id="comment" name="reason"></textarea>
          </div>
          <div class="form-floating mb-3 mt-3">
              <input type="date" class="form-control" id="from_date" name="from_date" max="" min="">
              <label for="from_date">Leave from</label>
          </div>
          <div class="form-floating mt-3 mb-3">
              <input type="date" class="form-control" id="to_date"  name="to_date">
              <label for="to_date">Leave To</label>
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
</div>
 <br><br><br>
<!---director approval part----->
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
<!-----reasons part-------->
<div class="input-group mb-3">
       <div class="input-group-text">
     <input disabled type="radio">
  </div>
     <input disabled type="text" class="form-control" placeholder="Reason for Rejection ">
</div>
</div> <br><br><br>

<!------------------------------------------------------------------->

            </form>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection