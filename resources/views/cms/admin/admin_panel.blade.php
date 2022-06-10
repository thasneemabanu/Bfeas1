
@extends('layouts.cms') 

@section('content')

<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">

       <div class="container-fluid"> 
         <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome to Admin Panel</h1>
                    @if (Session::has('message'))
                        <p class="alert {{Session::get('alert-class', 'álert-info') }}" > {{ Session::get('message')}}</p>
                    @endif
                </div>
                <div class="col-sm-6" >
                    
                    <ol class="breadcrumb float-sm-right">
                     <!--   <li class="breadcrumb-item"><a href="/adminpanel"><b>Home</b></a></li>
                        <li class="breadcrumb-item"><a href="/adminleave"><b>Leaves</b> </a></li>
                        <li class="breadcrumb-item"><a href="/adminattendancereport"><b>Attendance-Report</b> </a></li>
                        <li class="breadcrumb-item"><a href="/adminmanageemployee"><b>Employee-Management</b></a></li>-->
                        <li class="breadcrumb-item active"><b>Admin control Panel</b></li>
                    </ol>
                </div>
         </div>
        </div><!-- /.container-fluid -->

    </section>

     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
           
        <section class="content">
          <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
             <div class="row">
                <div class="col-lg-3 col-6">
            <!-- small box -->
             <div class="small-box bg-info">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>
                <p> Total Attendees </p>
              </div>

              <div class="icon">
                <i class="fa fa-male"></i>
              </div>
              <a href="/adminattendancereport" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Incomplete Profiles</p>
              </div>
              <div class="icon">
                <i class=" fa fa-male"></i>
              </div>
              <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Registered users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/viewemployees" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Users information</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header border-0">
              <!--  <div class="d-flex justify-content-between">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div> -->
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">value</span>
                    <span>Overall employee attendance </span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> value
                    </span>
                    <span class="text-muted"></span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                  <canvas id="sales-chart" height="250" style="display: block; height: 200px; width: 635px;" width="793" class="chartjs-render-monitor"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
          
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    

</div>

@endsection
