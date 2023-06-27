@extends('layouts.app')

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
     
   
   
     
      
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">All Results</h4>
              <p class="card-description">
               <a href="{{ url('result/add') }}" class="btn btn-primary">Add Result</a>
              </p>
              <div class="table-responsive pt-4">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Number
                      </th>
                      <th>
                        Rll Number
                      </th>

                      <th>
                        Register  Number
                      </th>

                      <th>
                        Grade
                      </th>

                      <th>
                        Session
                      </th>

                      <th>
                        Student Image
                      </th>

                      <th>
                        Action
                      </th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($results as $result)
                        
            
                    <tr class="table-info">
                      <td>
                        {{$loop->iteration}}
                      </td>
                      <td>
                        {{ $result->name}}
                      </td>
                      <td>
                        {{ $result->email}}
                      </td>
                      <td>
                        {{ $result->number}}
                      </td>

                      <td>
                        {{ $result->code}}
                      </td>
                      <td>
                        {{ $result->register_no}}
                      </td>

                      <td>
                        {{ $result->grade}}
                      </td>

                      <td>
                        {{ $result->session_year}}
                      </td>

                      <td>
                       <img src="{{url('backend/result/'.$result->image)}}" alt="" height="50px;" width="50px;">
                      </td>
                      <td>
                        <a href="{{ url('result/edit',$result->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ url('result/delete',$result->id) }}" class="btn btn-danger" id="delete">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection