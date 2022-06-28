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


<table class="table table-bordered">
                  <thead>
                    <div class="col-sm-12 col-md-6">
                         <div id="example1_filter" class="dataTables_filter">                  
                         <label>Search an employee<input type="search" class="form-control form-control-sm" placeholder="Enter employee ID" aria-controls="example1"></label>               
                   </div>
                   <br>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Employee_ID</th>
                      <th>Department_ID</th>
                      <th>Date</th>
                      <th>Entry Time</th>
                      <th>Exit Time</th>
                     <!--<th style="width: 40px">Label</th>-->
                    </tr>
                  </thead>
                  <tbody>                   
                    <tr></tr>
                  </tbody>
                </table>

<div class="col-sm-12 col-md-7">
                        <a href="/update_attendance" class="btn btn-secondary buttons-copy buttons-html5">
                        <span> Update  </span></a></button> 
                        <a href="" class="btn btn-secondary buttons-copy buttons-html5">
                        <span> Delete </span></a></button>
                        </div>
                      </div>
                    </div>
</div>                       
              </div> <!-- /end of card-body -->
        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->
</div>

@endsection


