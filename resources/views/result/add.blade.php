@extends('layouts.app')

@section('content')


<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Result Add</h4>
              <p class="card-description">
               <a href="{{ url('results') }}" class="btn btn-primary">All Result</a>
              </p>
              <form action="{{ url('result/store') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername1"  placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Father /Husband Name </label>
                    <input type="text" name="father_name" class="form-control" id="exampleInputEmail1" placeholder="Father/Husband Name" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Mother Name</label>
                    <input type="text" name="mother_name" class="form-control" id="exampleInputEmail1" placeholder="Mother Name" required >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Gender </label>
                    <input type="text" name="gender" class="form-control" id="exampleInputEmail1" placeholder="Gender" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Roll Number </label>
                    <input type="text" name="code" class="form-control" id="exampleInputEmail1" placeholder="Roll Number" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Register  Number </label>
                    <input type="text" name="register_no" class="form-control" id="exampleInputEmail1" placeholder="Register " required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Grade </label>
                    <input type="text" name="grade" class="form-control" id="exampleInputEmail1" placeholder="grade" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Session Year</label>
                    <input type="text" name="session_year" class="form-control" id="exampleInputEmail1" placeholder="Session Year" required>
                  </div>




                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" required>

                    
                  </div>
               
             
             
                <button type="submit" class="btn btn-primary mr-2">Save</button>
               
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