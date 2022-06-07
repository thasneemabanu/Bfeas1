@extends('layouts.cms')

@section('content')


<div class="content-wrapper" style="min-height: 2646.44px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome to Director Panel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/director"><b>Home</b></a></li>
                        <li class="breadcrumb-item"><a href="/directorleavepermision"><b>LeaveApprovals</b></a></li>
                        <li class="breadcrumb-item active"><b>Director-Control-Panel</b></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @include('includes.panels')  

</div>

@endsection