@extends('dash_student')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Submission</h1>
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
    
    
    
    <div class="card card-primary">
              
              <!-- form start -->
              <form role="form" action="{{route('store', $details->id)}}" method="post" enctype="multipart/form-data" id="my-form">
               
             {{csrf_field()}}
              <div class="card-body">
              <div class="card-header">
             
            
              <h2 class="card-title">{{$details->assgTitle}}</h2>
           
              </div>
              <br>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
                </div>
              </form>
              
            </div>
           
    
    </section>
    <!-- /.content -->

@endsection

