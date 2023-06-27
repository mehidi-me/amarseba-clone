@extends('admin.layouts.layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">User  Management</h3>
                        <h4 class="font-weight-normal mb-0">User </h4>
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                  <h4 class="card-title">{{ $title }}</h4>
                  	@if(Session::has('error_message'))
		               <div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Error!</strong>{{Session::get('error_message')}}
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

                  <form class="forms-sample" @if(empty($user['id'])) action="{{url('admin/add-edit-user')}}" @else action="{{ url('admin/add-edit-user/'.$user['id']) }}" @endif method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-group">
                      <label for="name">User  Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter User   Name" name="name" @if(!empty($user['name'])) value="{{$user['name']}}" @else value="{{ old('name') }}" @endif>
                    </div>

                      <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter User Name " name="username" @if(!empty($user['username'])) value="{{$user['username']}}" @else value="{{ old('username') }}" @endif>
                      </div>




                      <div class="form-group">
                        <label for="number">User Phone</label>
                        <input type="text" class="form-control" id="number" placeholder="Enter User Phone" name="number" @if(!empty($user['number'])) value="{{$user['number']}}" @else value="{{ old('number') }}" @endif>
                      </div>

                      <div class="form-group">
                        <label for="dob">User Birth Day</label>
                        <input type="date" class="form-control" id="dob"  name="dob" @if(!empty($user['dob'])) value="{{$user['dob']}}" @else value="{{ old('dob') }}" @endif>
                      </div>


                      <div class="form-group">
                        <label for="address">User Address </label>
                        <input type="text" class="form-control" id="address"  name="address" @if(!empty($user['address'])) value="{{$user['address']}}" @else value="{{ old('address') }}" @endif>
                      </div>


                      <div class="form-group">
                        <label for="dob">User Nid </label>
                        <input type="text" class="form-control" id="nid"  name="nid" @if(!empty($user['nid'])) value="{{$user['nid']}}" @else value="{{ old('nid') }}" @endif>
                      </div>

                      <div class="form-group">
                        <label for="centername">User Center Name </label>
                        <input type="text" class="form-control" id="centername"  name="centername" @if(!empty($user['centername'])) value="{{$user['centername']}}" @else value="{{ old('centername') }}" @endif>
                      </div>


                      <div class="form-group">
                        <label for="facebook">User Facebook </label>
                        <input type="text" class="form-control" id="facebook"  name="facebook" @if(!empty($user['facebook'])) value="{{$user['facebook']}}" @else value="{{ old('facebook') }}" @endif>
                      </div>

                      <div class="form-group">
                        <label for="twitter">User Twitter </label>
                        <input type="text" class="form-control" id="twitter"  name="twitter" @if(!empty($user['twitter'])) value="{{$user['twitter']}}" @else value="{{ old('twitter') }}" @endif>
                      </div>

                      <div class="form-group">
                        <label for="whasapp">User WhatApps </label>
                        <input type="text" class="form-control" id="whasapp"  name="whasapp" @if(!empty($user['whasapp'])) value="{{$user['whasapp']}}" @else value="{{ old('whasapp') }}" @endif>
                      </div>


                      <div class="form-group">
                        <label for="balance">User Balance </label>
                        <input type="text" class="form-control" id="balance"  name="balance" @if(!empty($user['balance'])) value="{{$user['balance']}}" @else value="{{ old('balance') }}" @endif>
                      </div>





                      <div class="form-group">
                        <label for="image">User  Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if(!empty($user['image']))
                          <a target="_blank" href="{{url('admin/images/user/'.$user['image'])}}">View Image</a>&nbsp;|&nbsp;
                          {{-- <a href="javascript:void(0)" class="confirmDelete" module="sheba-image" moduleid="{{ $sheba['id'] }}">Delete Image</a> --}}
                        @endif
                    </div>







                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
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
