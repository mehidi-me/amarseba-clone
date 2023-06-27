@extends('layouts.app')

@section('content')


<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Result Edt</h4>
              <p class="card-description">
               <a href="{{ url('results') }}" class="btn btn-primary">All Result</a>
              </p>
              <form action="{{ url('result/update',$result->id) }}" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername1"  value="{{ $result->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1"  value="{{ $result->email }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="number" class="form-control" id="exampleInputEmail1" value="{{ $result->number }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Father /Husband Name </label>
                    <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" value="{{ $result->father_name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" value="{{ $result->mother_name }}" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{ $result->address }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender </label>
                    <input type="text" name="gender" class="form-control" id="exampleInputEmail1" value="{{ $result->gender }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Roll Number </label>
                    <input type="text" name="code" class="form-control" id="exampleInputEmail1" value="{{ $result->code }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Register  Number </label>
                    <input type="text" name="register_no" class="form-control" id="exampleInputEmail1" value="{{ $result->register_no }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Grade </label>
                    <input type="text" name="grade" class="form-control" id="exampleInputEmail1" value="{{ $result->grade }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Session Year</label>
                    <input type="text" name="session_year" class="form-control" id="exampleInputEmail1" value="{{ $result->session_year }}"d>
                  </div>




                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                    <img src="{{url('backend/result/'.$result->image)}}" alt="" height="50px;" width="50px;">
                    
                  </div>
               
             
             
                <button type="submit" class="btn btn-primary mr-2">Update</button>
               
              </form>
            </div>
          </div>
        </div>
      
       
      
       
    
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
 
    <!-- partial -->
  </div>

@endsection