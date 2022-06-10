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
                        <li class="breadcrumb-item active"><b>/ Annual Holidays-List</b></li>
                    </ol>
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
         
        <div class="container"> 

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
</div> <!--// end of mini container-->  

<div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>     
                      <th>Holiday fall date</th>
                      <th>Descriptions</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr>
                     <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr> <tr>
                      <td></td>
                      <td></td>
                      <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
                    </tr>
                     
                  </tbody>
                </table>
                    
                    <!--
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>-->
                    <br>
<a href="/holidayaddedit" class="btn btn-secondary btn-lg">
          <span class="glyphicon glyphicon-user"></span> Add Holiday 
         </a>
         
              </div>
         
</div><!--full container close -->

        </div><!-- /end of container-fluid -->
        
    </section>
    
</div><!-- /end of main content -->
<br><br>
@endsection