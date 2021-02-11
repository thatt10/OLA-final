@extends('dash_student')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Assignment</h1>
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
                      <th>Title</th>
                      <th>Description</th>
                      <th>Deadline</th>
                      <th>Submission</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>   
                   
                    @foreach($details as $row)
                      <td>{{$row->id}}</td>
                      <td>{{$row->assgTitle}}</td>
                      <td>{{$row->assgDesc}}</td>
                      <td>{{$row->deadline}}</td>
                      <td><a href="{{ route('subStore', $row->id)}}" class="btn btn-block btn-info">Submit</a></td>
                    </tr>
                    @endforeach
                   
                 
                  </tbody>
                </table>
              </div>
    
    </section>
    <!-- /.content -->

@endsection
