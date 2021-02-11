@extends('dash_student')
@section('content')
 
 <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grade</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Exam Type</th>
                      <th>Result</th>
                    </tr>  
                  </thead>
                  <tbody>
                    <tr>   
                      <td>1</td>
                      <td>Monthly Exam 1</td>
                      <td><a href="{{ asset('monthly1')}}" class="btn btn-block btn-info" style="width:20%">View</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Mid-Term Exam</td>
                      <td><a href="#" class="btn btn-block btn-info" style="width:20%">View</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Monthly Exam 2</td>
                      <td><a href="#" class="btn btn-block btn-info" style="width:20%">View</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Final Exam</td>
                      <td><a href="#" class="btn btn-block btn-info" style="width:20%">View</a></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
    
    </section>
    <!-- /.content -->
@endsection
