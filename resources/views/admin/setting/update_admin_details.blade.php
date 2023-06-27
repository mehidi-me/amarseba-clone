@extends('admin.layouts.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Settings</h3>
                        <!-- <h6 class="font-weight-normal mb-0">Admin Update Password </h6> -->
                    </div>

                </div>
            </div>
        </div>
        <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admin details Update </h4>
                  	@if(Session::has('error_message'))
		               <div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Error!</strong>{{Session::get('error_message')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  	<span aria-hidden="true">&times;</span>
						  </button>
				       </div>
	             	@endif

                    @if ($errors->any())
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                       @endforeach
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                   @endif

	             	@if(Session::has('success_message'))
		               <div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Success!</strong>{{Session::get('success_message')}}
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  	<span aria-hidden="true">&times;</span>
						  </button>
				       </div>
	             	@endif

                  <form class="forms-sample" action="{{url('admin/update-details')}}" method="POST"enctype="multipart/form-data" >@csrf
                    <div class="form-group">
                      <label>Admin Username/Email</label>
                      <input class="form-control" value="{{ Auth::guard('admin')->user()->email }}" readonly="">
                    </div>
              
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ Auth::guard('admin')->user()->name }}">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control" id="mobile" placeholder="Enter 11 Digit Mobile Number" name="mobile" value="{{ Auth::guard('admin')->user()->mobile }}" maxlength="11" minlength="11">
                    </div>
                    <div class="form-group">
                      <label for="image">Image</label>
                      <input type="file" name="image" class="form-control" id="image" accept="image/">
                        @if(!empty(Auth::guard('admin')->user()->image))
                          <a target="_blank" href="{{url('admin/images/photos/'.Auth::guard('admin')->user()->image)}}">View Image</a>
                          <input type="hidden" name="current_image" value="{{ Auth::guard('admin')->user()->image }}">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.layouts.footer')
    <!-- partial -->
</div>
@endsection
