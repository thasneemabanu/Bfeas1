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
            <div class="col-12">
            
                <!-- /.card -->
            
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">  Employee ID : {{$employee->id}} , Name : {{$employee->name}} ,Has taken total leaves</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Date</th>
                                    <th>Types of leave</th>
                                    <th>Reason</th>
                                    <th style="width: 40px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                $i=1;
                                @endphp
                                @foreach($leaves as $leave)           <!--loop to go through db model name(model and db only communicate in MVC)$leaves as $<user defined variable>-->
                                <tr>
                                    <td>{{$i++}}</td>                <!--# number should be as per employees -->
                                    <td>{{$leave->date}}</td>
                                    <td>{{$leave->leave_type}}</td>
                                    <td>{{$leave->leave_reason}}</td>           <!-- reasons indicated with different badge colours ,conditions as follows-->
                                    <td><span class="badge 
                                        @if($leave->leave_status=='Requested')   
                                        bg-warning 
                                        @elseif($leave->leave_status=='Recommended')
                                        bg-primary 
                                        @elseif($leave->leave_status=='Approved')
                                        bg-success 
                                        @elseif($leave->leave_status=='Rejected')
                                        bg-danger 

                                        @endif
                                        ">{{$leave->leave_status}}</span></td>                          
                                </tr>
                                @endforeach     
                                
                                <!--<td>
                                <button type="button" class="btn btn-block"><a href="/adminattendancereport">Previous</a></button>
                                </td>-->
                            </tbody> 
                        </table>
                    </div> <!-- /.card-body -->               
                </div> <!-- /.card -->               
            </div>
</div>
</div>
</section>  
</div>

@endsection
