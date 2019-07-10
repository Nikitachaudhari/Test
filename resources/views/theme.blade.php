@extends('layout.header')

@section("content")
 <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action=" employees1" method="get">
             <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">id address</label>
                  <input type="id" class="form-control" id="exampleInputEmail1" placeholder="Enter id" name="id">
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">name address</label>
                  <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name">
                </div>
             
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">
                </div>
                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">designation address</label>
                  <input type="designation" class="form-control" id="exampleInputEmail1" placeholder="Enter designation" name="designation">
                </div>
                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> address</label>
                  <input type="address" class="form-control" id="exampleInputEmail1" placeholder="Enter address" name="address">
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">phoneno</label>
                  <input type="phoneno" class="form-control" id="exampleInputEmail1" placeholder="Enter phoneno" name="phoneno">
                </div>
             
             <button class="btn btn-success">submit</button>
              </div>
              </div>
              </div>
              </div>
              </div>
              </div>
              
              
              
     @endsection