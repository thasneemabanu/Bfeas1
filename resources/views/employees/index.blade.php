@extends('layouts.cms')

@section('content')
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
                     <li class="breadcrumb-item active"><b>View Employees</b></li>                
                     <li class="breadcrumb-item active"><b> Admin-control-Panel</b></li> 
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
<!--card begin-->
<div class="card">
              <div class="card-header">
                <h3 class="card-title"> Employees details </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"></div>
               </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" >Employee_ID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >EmployeeID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >DepartmentID</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Joined Date</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Contact Number</th>
                  </tr> 
                  </thead>
                  <tbody>
               @foreach ($users as $user)
                  <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td>{{$users->id}}</td>
                    <td>{{$users->department_id}}</td>
                    <td>{{$users->employed_from_date}}</td>
                    <td>{{$users->phone}}</td>
                  </tr>
              @endforeach
              
                  <!--<tr class="even">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="dtr-control sorting_1" tabindex="0"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="odd">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr><tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                    <tr class="even">
                    <td class="sorting_1 dtr-control"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=""></td>
                  </tr>-->
                </tbody>              
                </table>
            </div>
        </div>
      
      </div> <!-- /.card-body -->
        </div> <!-- /.container-fluid -->

        <a href="/adminaddemployee" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span> Add employee 
        </a>
        <a href="/admineditemployee" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-user"></span> Edit employee 
        </a>
  </section>   <!-- /.section -->              
</div><!-- /.content -->
@endsection
