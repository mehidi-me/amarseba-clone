@extends('layouts.app')

@section('content')


<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Profle Update</h4>
              <p class="card-description">
               Profile Update Admin Panel
              </p>
              <form action="{{ url('user/update') }}" class="forms-sample" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="{{ $userDetails->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $userDetails->email }}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="number" class="form-control" id="exampleInputEmail1" value="{{ $userDetails->number }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">

                    <img src="{{url('backend/user/'.$userDetails->image)}}" alt="" height="50px;" width="50px;">
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